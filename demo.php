<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Văn học</title>
    <style>
        body {
            background-color: #FFCCCC; 
        }

        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
        }
        
        .img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border: 5px solid #fff;
            border-radius: 10px 
        }

        p{
            font-size: 20px; /* Cỡ chữ 30px */
            margin: 10px; /* Khoảng cách giữa các đoạn văn bản */
            text-align: justify; /* Căn đều văn bản */
        }
    </style>
</head>
<body>

<?php
    echo '<h1 style="color: #990000; text-align: center;"> VỢ NHẶT </h1>';
    echo '<p>
            Tràng là một người dân sống ngụ cư sống cùng với mẹ già. Anh làm nghề kéo xe bò thuê. Một lần trên đường kéo cái xe bò thóc trên tỉnh anh quen được Thị, Chỉ với bốn bát bánh đúc thị đã đồng ý làm vợ Tràng. Về đến nhà Tràng phấp phỏng chờ mẹ về để thưa chuyện. Đến khi bà cụ Tứ trở về vô cùng ngạc nhiên khi thấy có người phụ nữ lạ trong nhà, nghe con kể rõ sự tình người mẹ nghèo khổ ấy đã hiểu ra và  chấp nhận nàng dâu mới động viên các con cố gắng làm ăn. Sáng hôm sau Tràng thức dậy thấy mọi thứ đã thay đổi. Bữa ăn đầu tiên của nàng dâu mới chỉ có độc một lùm rau chuối thái rối và một đĩa muối ăn với cháo, nhưng họ vẫn vui vẻ vừa ăn vừa nói chuyện đến tương lai. Bà cụ Tứ bê nồi cháo cám lên, người vợ nhặt vẫn điềm nhiên và vào miệng. Tràng cầm đôi đũa gạt một miếng bỏ vội vào miệng. Nghe tiếng trống thúc thuế Tràng nhớ đến cảnh người ta vào kho thóc chia cho người đói và hình ảnh lá cờ đỏ thắm.
        </p>';
    echo '<div class="img-container"><img class="img" src="picture1.jpg" alt="Hình ảnh"></div>';
?>
</body>
</html>