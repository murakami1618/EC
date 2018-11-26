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
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);

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
//注文画面
Route::get("/order",function(){
    $erro = session()->get("FORM_MESSAGE");
    return view("order",["erro"=>$erro]);
});


//注文処理
Route::post("/order",function(){

    if(request()->get("name") == ""){
        session()->put("FORM_MESSAGE","名前を入力してください");
        return redirect("/order");
    }
    if(request()->get("address") == ""){
        session()->put("FORM_MESSAGE","住所を入力してください");
        return redirect("/order");
    }

    // ここで カートの中身をDBに保存する
    DB::insert("INSERT into orders (name,address,tel,email,orders) VALUES (?,?,?,?,?)",[
        request()->get("name"),
        request()->get("address"),
        request()->get("tel"),
        request()->get("email"),
        json_encode(session()->get("CART_ITEMS"))
    ]);
    session()->forget("CART_ITEMS"); // ここでカートを空に
    return redirect("/order/thanks");
});


//注文完了画面
Route::get("/order/thanks",function(){
    return view("thanks");
});

//

Route::post("/cart/clear",function(){
    session()->forget('CART_ITEMS');
    return redirect("/cart/list");
});

Route::post("/top",function(){
    return redirect("/items");
});

Route::post("/cart",function(){
    return redirect("/cart/list");
});