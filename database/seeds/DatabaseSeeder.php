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
            "卓越した香気を持ち、調和の取れた味わい、軽い口当りと滑らかな咽越しが特徴。 最高級の品質と呼ばれています。 ジャマイカで生産されるコーヒーのうちごく一部の産地のものがブルーマウンテンとブランド付けられています。 その中でもさらにランク付けがなされています。",
            "200",
            "＊＊＊",//苦味
            "＊・・",//コク
            "＊＊・",//香り
            "・・・",//酸味
            "アメリカ"
        ]);

        DB::insert("INSERT into items (name,img,description,price,bitter,koku,kaori,san,make) VALUES (?,?,?,?,?,?,?,?,?)",[
            "キリマンジャロ",
            "/images/been.jpg",
            "上質な酸味とコーヒーの苦味がバランスよく調和し、甘いコクと上品な香りに優れたコーヒーです。生育された標高が高いほど香りがよく、品質が高いと言われます。雑味のない後味で飲みやすく、深く焙煎したり浅く焙煎したりと、焙煎方法によりさまざまな風味が楽しめるのが特徴です。",
            "250",
            "＊・・",//苦味
            "＊＊・",//コク
            "＊・・",//香り
            "＊＊・",//酸味
            "アメリカ"
        ]);

        DB::insert("INSERT into items (name,img,description,price,bitter,koku,kaori,san,make) VALUES (?,?,?,?,?,?,?,?,?)",[
            "ブルボン",
            "/images/been.jpg",
            "アラビカ種のコーヒー豆はブルボン種とティピカ種が二大品種と言われており、ブルボン種はティピカ種から突然変異してできた小粒で丸みのあるコーヒー豆です。

",
            "150",
            "＊＊・",//苦味
            "＊＊・",//コク
            "＊＊・",//香り
            "＊・・",//酸味
            "ブラジル"
        ]);
        DB::insert("INSERT into items (name,img,description,price,bitter,koku,kaori,san,make) VALUES (?,?,?,?,?,?,?,?,?)",[
            "ムンドノーボハード",
            "/images/been.jpg",
            "甘い香りが非常に強く、お菓子のような香りを楽しめるコーヒー豆です。苦味や酸味が非常に少なくスッキリとした味わいを楽しむことができます。",
            "250",
            "＊・・",//苦味
            "＊・・",//コク
            "＊＊＊",//香り
            "・・・",//酸味
            "ブラジル"
        ]);

        DB::insert("INSERT into items (name,img,description,price,bitter,koku,kaori,san,make) VALUES (?,?,?,?,?,?,?,?,?)",[
            "コピ・ルアク",
            "/images/been.jpg",
            "マレージャコウネコの糞から洗浄され、取り出され焙煎された高級なコーヒー豆です。コーヒーのえぐみがなく誰でも飲みやすい口当たりのコーヒーが楽しめます。",
            "980",
            "＊＊・",//苦味
            "＊＊＊",//コク
            "＊＊・",//香り
            "＊・・",//酸味
            "マレーシア"
        ]);
    }
}
