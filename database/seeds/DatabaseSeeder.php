<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT into items (name,img,description,price,bitter,koku,kaori,san,make) VALUES (?,?,?,?,?,?,?,?,?)",[
            "ブルーマウンテン",
            "/images/been.jpg",
            "メジャーなコーヒーです",
            "200",
            "＊＊＊",//苦味
            "＊・・",//コク
            "＊＊・",//香り
            "・・・",//酸味
            "アメリカ"
        ]);
        DB::insert("INSERT into items (name,img,description,price,bitter,koku,kaori,san,make) VALUES (?,?,?,?,?,?,?,?,?)",[
            "ブルボン",
            "/images/been.jpg",
            "甘みの強いコーヒーです",
            "150",
            "＊・・",
            "＊＊・",//コク
            "＊＊・",//香り
            "＊・・",//酸味
            "ブラジル"
        ]);
    }
}
