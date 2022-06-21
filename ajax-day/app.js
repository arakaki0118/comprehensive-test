$(function () {
    $("#serch_btn").click(function () {
        // 入力された値を取得
        let zipcode = document.getElementById('zipcode');
        // urlを設定
        var url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" + zipcode.value;
        // 送るデータを成形する
        var param = { zipcode: zipcode.value };

        // サーバーと通信(Ajax)
        $.ajax({
            type: 'POST', 
            cache: false,
            data: param,
            url: url,
            dataType: 'json'
        })
        .done(function (res) {
            console.log(res);
            if (res.status != 200) {
                // 通信には成功。APIの結果がエラー
                // エラー内容を表示
                $('#zip_result').html(res.message);
                zipcode.value = '';
            } else if (res.results != null) {
                //住所を表示

                // 返り値を格納
                let result = res.results[0];
                
                // 検索結果を表示
                $('#zip_result').html("<br>");
                $('#zip_result').append("<p>検索結果を表示します</p>");
                $('#zip_result').append("<br>");
                $('#zip_result').append("<p>都道府県ｺｰﾄﾞ：" + result.prefcode + "</p>");
                $('#zip_result').append("<p>都道府県：" + result.address1 + "</p>");
                $('#zip_result').append("<p>市区町村：" + result.address2 + "</p>");
                $('#zip_result').append("<p>町域：" + result.address3 + "</p>");
                $('#zip_result').append("<p>都道府県(ｶﾅ)：" + result.kana1 + "</p>");
                $('#zip_result').append("<p>市町村区(ｶﾅ)：" + result.kana2 + "</p>");
                $('#zip_result').append("<p>町域(ｶﾅ)：" + result.kana3 + "</p>");

            } else {
                // 返り値がnullの場合のメッセージ
                $('#zip_result').html("<p>郵便番号が検索できませんでした</p>");
            }

            $("#clear_btn").click(function () {
                zipcode.value = '';
            })

        })
        .fail(function (error) {
            console.log(error);
            $('#zip_result').html("<p>通信エラーです。時間をおいてお試しください</p>");
        });
    });
});