<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>From</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch&family=Noto+Serif+Thai:wght@300&display=swap');

    * {
        font-family: 'Chakra Petch', sans-serif;
    }

    .container_color {
        background-color: white;
    }

    body {
        background-color: #EEEEEE;
    }

    .title {
        text-align: center;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .idnumber {
        margin-top: 10px;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 title">
                <h2>แบบฟอร์ม</h2>
            </div>
        </div>
        <div class="container container_color">
            <form class="row g-3">
                <select class="form-select" aria-label="Default select example" id="gender" required>
                    <option selected>คำนำหน้า</option>
                    <option value="1">นาย</option>
                    <option value="2">นางสาว</option>
                </select>
                <div class="input-group mb-3">
                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">คำนำหน้า</button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item">นาย</p>
                        </li>
                        <li>
                            <p class="dropdown-item">นางสาว</p>
                        </li>
                    </ul> -->
                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                        placeholder="ชื่อจริง*" id="fname" required>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                        placeholder="นามสกุล*" id="lname" required>
                </div>
                <div class="col-md-6">
                    <label for="IDname" class="form-label" required>เลขประชาชน*</label>
                    <input type="number" class="form-control" id="IDnumber" required>
                </div>
                <div class="col-md-6">
                    <label for="religion" class="form-label">ศาสนา*</label>
                    <select id="religion" class="form-select" id="religion" required>
                        <option selected>เลือกศาสนา</option>
                        <option value="3">ศาสนาพุทธ</option>
                        <option value="4">ศาสนาอิสลาม</option>
                        <option value="5">ศาสนาคริสต์</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="province" class="form-label">จังหวัด*</label>
                    <select id="province" class="form-select" required>
                        <option selected>เลือกจังหวัด</option>
                        <option value="Chumphon">ชุมพร</option>
                        <option value="Nakhon_Si_Thammarat">นครศรีธรรมราช</option>
                        <option value="Prachuap_Khiri_Khan">ประจวบคีรีขันธ์</option>
                        <option value="Bangkok">กรุงเทพมหานคร</option>
                        <option value="Chanthaburi">จันทบุรี</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="district" class="form-label">อำเภอ/เขต*</label>
                    <input type="text" class="form-control" id="district" required>
                </div>
                <div class="col-md-4">
                    <label for="place" class="form-label">ตำบล/เเขวง*</label>
                    <input type="text" class="form-control" id="place" required>
                </div>
                <div class="col-md-4">
                    <label for="IDhome" class="form-label">บ้านเลขที่*</label>
                    <input type="text" class="form-control" id="IDhome" required>
                </div>
                <div class="col-md-4">
                    <label for="group" class="form-label">หมู่ที่*</label>
                    <input type="number" class="form-control" id="group" required>
                </div>
                <div class="col-md-4">
                    <label for="road" class="form-label">ถนน*</label>
                    <input type="text" class="form-control" id="road" required>
                </div>
                <div class="col-md-4">
                    <label for="ZIP_code" class="form-label">รัหสไปรณีย์*</label>
                    <input type="number" class="form-control" id="ZIP_code" required>
                </div>
                <div class="col-md-4">
                    <label for="mobile_phone" class="form-label">โทรศัพท์มือถือ*</label>
                    <input type="number" class="form-control" id="mobile_phone" required>
                </div>
                <div class="col-md-4">
                    <label for="home_phone" class="form-label">โทรศัพท์บ้าน</label>
                    <input type="number" class="form-control" id="home_phone">
                </div>
                <div class="col-md-6">
                    <label for="sex" class="form-label">เพศ*</label>
                    <select id="sex" class="form-select" required>
                        <option selected>เพศของท่าน</option>
                        <option value="man">ชาย</option>
                        <option value="woman">หญิง</option>
                        <option value="other">อื่นๆ</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="branch" class="form-label">สาขาที่เเทนสนใจ*</label>
                    <select id="branch" class="form-select" required>
                        <option selected>ท่านสนใจ</option>
                        <option value="ITD">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
                        <option value="IMI">นวัตกรรมสารสนเทศทางการแพทย์</option>
                        <option value="MTA">เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม</option>
                        <option value="DCM">ดิจิทัลคอนเทนต์และสื่อ</option>
                        <option value="DCA">นิเทศศาสตร์ดิจิทัล</option>
                    </select>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto" style="margin-bottom:20px">
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                </div>
            </form>
        </div>
        <script>
            // function Submit() {
            //     var gender = $("gender").val();
            //     var fname = $("#fname").val();
            //     var lname = $("#lname").val();
            //     var IDnumber = $("#IDnumber").val();
            //     var religion = $("#religion").val();
            //     var province = $("#province").val();
            //     var district = $("#district").val();
            //     var place = $("#place").val();
            //     var IDhome = $("#IDhome").val();
            //     var group = $("#group").val();
            //     var road = $("#road").val();
            //     var ZIP_code = $("#ZIP_code").val();
            //     var mobile_phone = $("#mobile_phone").val();
            //     var home_phone = $("#home_phone").val();
            //     var sex = $("#sex").val();
            //     var branch = $("#branch").val();

            //     var data = "{";
            //     data += '"gender":"' + gender + '",';
            //     data += '"fname":"' + fname + '",';
            //     data += '"lname":"' + lname + '",';
            //     data += '"IDnumber":"' + IDnumber + '",';
            //     data += '"religion":"' + religion + '",';
            //     data += '"province":"' + province + '",';
            //     data += '"district":"' + district + '",';
            //     data += '"place":"' + place + '",';
            //     data += '"IDhome":"' + IDhome + '",';
            //     data += '"group":"' + group + '",';
            //     data += '"road":"' + road + '",';
            //     data += '"ZIP_code":"' + ZIP_code + '",';
            //     data += '"mobile_phone":"' + mobile_phone + '",';
            //     data += '"home_phone":"' + home_phone + '",';
            //     data += '"sex":"' + sex + '",';
            //     data += '"branch ":"' + branch + '",';
            //     data += "}";
            //     console.log(JSON.parse(data));
            // }
            // $(() => {
            //     $("#btnSummit").click(Submit);
            // });

            $("#btnSubmit").click(() => {
            var data = $.parseJSON(`{
            "gender": "${$("#gender").val()}", 
            "fname": "${$("#fname").val()}", 
            "lname": "${$("#lname").val()}", 
            "IDnumber": "${$("#IDnumber").val()}",
            "religion": "${$("#religion").val()}",
            "province": "${$("#province").val()}",
            "district": "${$("#district").val()}",
            "place": "${$("#place").val()}",
            "IDhome": "${$("#IDhome").val()}",
            "group": "${$("#group").val()}",
            "road": "${$("#road").val()}",
            "ZIP_code": "${$("#ZIP_code").val()}",
            "mobile_phone": "${$("#mobile_phone").val()}",
            "home_phone": "${$("#home_phone").val()}",
            "sex": "${$("#sex").val()}",
            "branch": "${$("#branch").val()}"}`);
                console.log(data);
                });
        </script>

</body>
<!-- required ต้องกรอก -->

</html>
