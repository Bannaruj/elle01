<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{padding: 40px}
        .form-group{
            margin-bottom: 10px; padding-bottom: 10px;
        }
        input[type="text"],input[type="password"],input[type="number"]{
            width: 100%; padding: 5px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">All Form with PHP</h1>
    <hr>
    <form action="./dti06_result.php" method="GET" enctype="">
        <div class="form-group">
        <label for="fname">ชื่อ-นามสกุล</label>
        <input type="text" id="fname" name="fname">
        </div>
        <div class="form-group">
        <label for="password">รหัสผ่าน</label>
        <input type="password" id="pword" name="pword">
        </div>
        <div class="form-group">
        <label for="age">อายุ</label>
        <input type="number" id="age" name="age">
        </div>
        <div class="form-group">
             <label for="gender">เพศ</label>
             <input type="radio" name="gender" value="ชาย" checked id="">ชาย
             <input type="radio" name="gender" value="หญิง" checked id="">หญิง
             <input type="radio" name="gender" value="ครัวซอง" checked id="">croissant
        </div>
        <div class="form-group">
             <label for="plang">ภาษาโปรแกรมที่ชอบ</label>
             <input type="checkbox" name="plang[]" value="C" checked id="">C
                    <input type="checkbox" name="plang[]" value="JAVA" checked id="">JAVA
                    <input type="checkbox" name="plang[]" value="PYTHON" checked id="">PYTHON
             <input type="checkbox" name="plang[]" value="PHP+" checked id="">PHP+
        </div>
        <div class="form-group">
             <label for="food">อาหารที่ชอบ</label>
             <input type="checkbox" name="food1" value="KFC" checked id="">KFC
             <input type="checkbox" name="food2" value="Pizza" checked id="">Pizza
             <input type="checkbox" name="food3" value="Donut" checked id="">Donut
             <input type="checkbox" name="food4" value="Burger" checked id="">Burger
        </div>
        <div class="form-group">
             <label for="country">ประเทศที่ชอบ: </label>
             <select name="country" id="country">
                 <option value="Japan">ญี่ปุ่น</option>
                 <option value="America">อเมริกา</option>
                 <option value="Canada">แคนาดา</option>
                 <option value="Thailand">ไทย</option>
             </select>
        </div>
                <div class="form-group">
             <label for="province">จังหวัดที่ชอบ: </label>
             <select name="province" id="province">
                 <option value="Bangkok">กรุงเทพ</option>
                 <option value="Yala">ยะลา</option>
                 <option value="Nan">น่าน</option>
                 <option value="Lampoon">ลำพูน</option>
             </select>
        </div>
        <div class="form-group">
            <label for="bdate">วันเกิด</label>
            <input type="date" name="bdate" id="bdate">
        </div>
        <div class="form-group">
        <label for="likelevel">ระดับความชอบ</label>
        0<input type="range" name="likelevel" id="likelevel">100
        </div>
        <div class="form-group">
        <label for="comment">ความคิดเห็น</label>
        <textarea type="comment" name="comment" rows="5"></textarea>
        </div>
                <div>
        <input type="submit" value="ส่งข้อมูล">
        <input type="reset"  value="ล้างข้อมูล">
        </div>

    </form>
</body>
</html>