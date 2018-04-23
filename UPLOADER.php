<?php

    // ファイルの保存先およびファイル名の設定
    $UPPASS = $_FILES['ISHIDAKEY']['name'];

    // アップロードされたファイルに、パスとファイル名を設定して保存
    move_uploaded_file($_FILES['ISHIDAKEY']['tmp_name'], $UPPASS);


	echo"サーバーを確認してください";

?>