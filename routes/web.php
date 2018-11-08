<?php



Route::get('/', function () {
    return view('welcome');
});
//トップページ
Route::get("/items",function(){
    $items = DB::select("SELECT * FROM items");
    return view("items",[
        "items" => $items
    ]);
});
//商品ページ
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


//商品カート

Route::get("/cart/list",function(){
    // DBからデータを１つ取り出す。
    $items = DB::select("SELECT * FROM items where id = 1");
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);
    // セッションにデータを追加して格納
    $cartItems[] = $items[0];
    session()->put("CART_ITEMS",$cartItems);

    return view("cart_list", [

        "cartItems" => $cartItems
    ]);
});
//商品追加
Route::post("/cart/add",function(){
    // フォームから IDを読み込みDBへ問い合わせる
    $id = request()->get("item_id");
    $items = DB::select("SELECT * FROM items where id = ?",[$id]);
    if(count($items) > 0){
        // セッションにデータを追加して格納
        $cartItems = session()->get("CART_ITEMS",[]);
        $cartItems[] = $items[0];
        session()->put("CART_ITEMS",$cartItems);
        return redirect("/cart/list");
    }else{
        return abort(404);
    }
});