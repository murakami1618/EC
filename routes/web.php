<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get("/items",function(){
    $items = DB::select("SELECT * FROM items");
    return view("items",[
        "items" => $items
    ]);
});

Route::get("/item/{id}",function($id){
    $items = DB::select("SELECT * FROM items where id = ?",[$id]);
    if(count($items) > 0){
        return view("item_detail",[
            "item" => $items[0]
        ]);
    }else{
        return abort(404);
    }
});

Route::get("/cart/list",function(){
    return view("cart_list");
});