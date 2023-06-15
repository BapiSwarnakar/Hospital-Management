<?php

namespace App\Http\Controllers\Backend\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use DataTables;
class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.dashboard.category.create');
    }
    public function store(CategoryRequest $request)
    {
        $data = new Category;
        $data->name = $request->name;
        $data->status = $request->status;
        $response = $data->save();
        if($response){
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Category Added Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
        }

        return $response;

    }

    public function view()
    {
        return view('backend.dashboard.category.view');
    }

    public function display(Request $request)
    {
        if ($request->ajax()) {

            $sql = Category::select('*');
            $row = $request->row;
            $type = $request->type;
            $from_date = $request->from_date;
            $to_date = $request->to_date;

            $status = $request->status;
            if($type !="")
            {
              $sql->where('shop_type_id',$type);
            }
            if($status !="")
            {
               $sql->where('status',$status);
            }
            if($from_date !='' && $to_date =='')
            {
               $sql->whereDate('created_at','>=',$from_date);
            }
            if($to_date !='' && $from_date =='')
            {
               $sql->whereDate('created_at','<=',$to_date);
            }

            if($from_date !='' && $to_date !='')
            {
               $sql->whereBetween(DB::raw("(DATE_FORMAT(created_at,'%Y-%m-%d'))"),[$from_date,$to_date]);
            }

            // $sql->orderby('id','ASC');

            // if($row !="All")
            // {
            //   $sql->limit($row);
            // }
            return Datatables::of($sql)
            ->addColumn('status', function ($row) {
                $active="";
                $deactive="";
                $blank="";
                if($row->status==1){
                    $active ="selected";
                }
                if($row->status==0){
                    $deactive ="selected";
                }
                if($row->status==null || $row->status ==""){
                    $blank ="selected";
                }
                $status = '';
                if(getLogInUserPermission('admin.category.status')){
                    $status = '<select class="form-control Status_Update" name="status" data-id="'.$row->category_id.'"  data-token="'.csrf_token().'" data-url="'.route('admin.category.status').'">
                        <option value="" '.$blank.'>Select</option>
                        <option value="1" '.$active.'>Active</option>
                        <option value="0" '.$deactive.'>Deactive</option>
                    </select>
                    ';
                }

                return $status;
            })
            ->addColumn('action', function ($row) {
                $delete = '';
                $edit = '';
                if(getLogInUserPermission('admin.category.delete')){
                    $delete = '<a href="javascript:void(0)" data-id="'.$row->category_id.'" data-token="'.csrf_token().'" data-url="'.route('admin.category.delete').'" class="btn btn-danger btn-sm Delete_Button"><i class="fa fa-trash"></i></a>
                ';
                }
                if(getLogInUserPermission('admin.category.edit')){
                    $edit = '<a href="'.route('admin.category.edit', ['id' => $row->category_id]).'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>';
                }
                return $delete.'&nbsp;&nbsp;'.$edit;
            })
            ->escapeColumns([])
            ->make(true);
            }
    }

    public function delete(Request $request)
    {
        # code...
        $data = Category::find($request->id);
        if(!empty($data)){
            $data->delete();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Category Detele Successfully");

        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Delete Category !");
        }

     return $response;

    }

    public function status(Request $request)
    {
        # code...
        $data = Category::find($request->id);
        if(!empty($data)){
            $data->status = $request->status;
            $data->save();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Category Status Update Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Update Category Status !");
        }

     return $response;

    }

    public function edit($id)
    {
        $data = Category::find($id);
        if(!empty($data))
        {
            return view('backend.dashboard.category.edit',compact('data'));
        }

        return view('backend.dashboard.category.view');

    }

    public function update(CategoryRequest $request)
    {
        $category = Category::find($request->id);
        if(!empty($category))
        {
            $category->name = $request->name;
            $category->status = $request->status;
            $response = $category->save();
            if($response){
                $response =  getResponse(true,false,false,null,"Category Update Successfully");

            }
            else{
                $response =  getResponse(false,false,false,null,"Technical isuue, please try again.. !");

            }
        }
        else
        {
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Invalid Category");
        }

        return $response;

    }
}
