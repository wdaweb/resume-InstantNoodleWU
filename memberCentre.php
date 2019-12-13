<?php
$useTable = "memberCentre";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員中心</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/resume.css">
    <link rel="stylesheet" href="./css/animate.css">
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./images/bg2.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: var(--font-family-sans-serif), 'Microsoft JHengHei';

        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0 0 0 100px;
            width: 80%;
        }

        td {
            border: 1px solid #ccc;
            padding: 5px;
            text-align: center;
            color: white;
        }

        h1 {
            text-align: center;
            color: white;
        }

        h4 {
            margin: 0 0 20px 100px;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark>
        <div class=" container">
        <a class="navbar-brand" href="#">
            <img src="./images/favicon.ico" width="30" height="30" class="d-inline-block" style="color:white">
            Instant Noodle WU
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.html">
                        <i class="fas fa-home"></i> Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <h1>管理者介面</h1>
    <!-- bootstrap modal -->
    <div class="modal" tabindex="-1" role="dialog">
        <!-- self -->
        <div class="edit">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" class="delete">
                        <h5 class="modal-title">編輯確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>確認更新嗎?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editCancel" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="editBtn">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- status -->
        <div class="edit2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" class="delete">
                        <h5 class="modal-title">編輯確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>確認更新嗎?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editCancel2" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="editBtn2">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- experience -->
        <div class="delete3">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" class="delete">
                        <h5 class="modal-title">刪除確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>確認刪除嗎?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class=" btn btn-secondary" id="delCancel3" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="delBtn3">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="edit3">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" class="delete">
                        <h5 class="modal-title">編輯確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>確認更新嗎?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editCancel3" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="editBtn3">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- education -->
        <div class="edit4">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" class="delete">
                        <h5 class="modal-title">編輯確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>確認更新嗎?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="editCancel4" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="editBtn4">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table id="table1">
        <h4>個人檔案<span class="badge badge-secondary">Profile</span></h4>
    </table>
    <hr class="bg-white">
    <table id="table2">
        <h4>求職狀態<span class="badge badge-secondary">Job searching status</span></h4>
    </table>
    <hr class="bg-white">
    <table id="table3">
        <h4>經歷<span class="badge badge-secondary">Experience</span></h4>
        <!-- 新增表單 -->

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-left: 100px">新增</button>
        
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               
                <div class="modal-dialog" role="document">
 
                    <div class="modal-content">
                        <form action="./api/add.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">新增經歷</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">工作名稱:</label>
                                    <input type="text" class="form-control" name="job_name" id="job_name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">公司名稱:</label>
                                    <input type="text" class="form-control" name="com_name" id="com_name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">工作內容:</label>
                                    <input type="text" class="form-control" name="job_content" id="job_content">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">從..</label>
                                    <input type="text" class="form-control" name="from_year" id="from_year">
                                    <input type="text" class="form-control" name="from_mon" id="from_mon">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">到..</label>
                                    <input type="text" class="form-control" name="to_year" id="to_year">
                                    <input type="text" class="form-control" name="to_mon" id="to_mon">
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Send message">
                        </div>
                        </form>
                    </div>

                </div>
                
            </div>
        
    </table>
    <hr class="bg-white">
    <table id="table4">
        <h4>學歷<span class="badge badge-secondary">Education</span></h4>
    </table>



    <table id="editTable1"></table>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script>
        //self彈出視窗
        $("#editCancel,close").on("click", function() {
            $(".modal").hide();
        })

        $("#editBtn").on("click", function() {
            let user = $(this).attr("data-uid");
            console.log(user)
            update(user)
            $(".modal").hide();
        })

        //status彈出視窗
        $("#editCancel2,close").on("click", function() {
            $(".modal").hide();
        })

        $("#editBtn2").on("click", function() {
            let user = $(this).attr("data-uid");
            console.log(user)
            update2(user)
            $(".modal").hide();
        })

        //experience彈出視窗
        $("#delCancel3,.close").on("click", function() {
            $(".modal").hide();
        })

        $("#delBtn3").on("click", function() {
            let user = $(this).attr("data-uid");
            // console.log(user)
            del(user)
            $(".modal").hide();
        })

        $("#editCancel3,close").on("click", function() {
            $(".modal").hide();
        })

        $("#editBtn3").on("click", function() {
            let user = $(this).attr("data-uid");
            console.log(user)
            update3(user)
            $(".modal").hide();
        })

        //education彈出視窗
        $("#editCancel4,close").on("click", function() {
            $(".modal").hide();
        })

        $("#editBtn4").on("click", function() {
            let user = $(this).attr("data-uid");
            console.log(user)
            update4(user)
            $(".modal").hide();
        })

        query('1');

        //self
        function query(cl) {
            $.get("./api/memberCentre_api1.php", function(res) {
                // console.log(res);
                $("#table1").html(res);
                $(".del-user").on("click", function() {
                    let user = $(this).data("del")
                    $("#delBtn").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").hide();
                    $(".edit2").hide();
                    $(".edit3").hide();
                    $(".delete3").hide();
                    $(".add3").hide();
                    $(".edit4").hide();
                })
                $(".edit-user").on("click", function() {
                    let user = $(this).data("edit");
                    $("#editBtn").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").show();
                    $(".edit2").hide();
                    $(".edit3").hide();
                    $(".delete3").hide();
                    $(".add3").hide();
                    $(".edit4").hide();
                })

            })
            //status
            $.get("./api/memberCentre_api2.php", function(res) {
                // console.log(res);
                $("#table2").html(res);
                $(".del-user2").on("click", function() {
                    let user = $(this).data("del")
                    $("#delBtn2").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").hide();
                    $(".edit2").hide();
                    $(".edit3").hide();
                    $(".delete3").hide();
                    $(".add3").hide();
                    $(".edit4").hide();
                })
                $(".edit-user2").on("click", function() {
                    let user = $(this).data("edit");
                    $("#editBtn2").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").hide();
                    $(".edit2").show();
                    $(".edit3").hide();
                    $(".delete3").hide();
                    $(".add3").hide();
                    $(".edit4").hide();
                })
            })
            //experience
            $.get("./api/memberCentre_api3.php", function(res) {
                // console.log(res);
                $("#table3").html(res);
                $(".del-user3").on("click", function() {
                    let user = $(this).data("del")
                    $("#delBtn3").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").hide();
                    $(".edit2").hide();
                    $(".edit3").hide();
                    $(".delete3").show();
                    $(".add3").hide();
                    $(".edit4").hide();
                })
                $(".edit-user3").on("click", function() {
                    let user = $(this).data("edit");
                    $("#editBtn3").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").hide();
                    $(".edit2").hide();
                    $(".edit3").show();
                    $(".delete3").hide();
                    $(".add3").hide();
                    $(".edit4").hide();
                })
            })
            //education
            $.get("./api/memberCentre_api4.php", function(res) {
                // console.log(res);
                $("#table4").html(res);
                $(".del-user4").on("click", function() {
                    let user = $(this).data("del")
                    $("#delBtn4").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").hide();
                    $(".edit2").hide();
                    $(".edit3").hide();
                    $(".delete3").hide();
                    $(".add3").hide();
                    $(".edit4").hide();
                })
                $(".edit-user4").on("click", function() {
                    let user = $(this).data("edit");
                    $("#editBtn4").attr("data-uid", user);
                    $(".modal").show();
                    $(".edit").hide();
                    $(".edit2").hide();
                    $(".edit3").hide();
                    $(".delete3").hide();
                    $(".add3").hide();
                    $(".edit4").show();
                })
            })
        }







        function del(id) {
            $.post("./api/delete.php", {
                id
            }, function(res) {
                location.reload()
                // console.log(res);
            })
        }
        //更新個人資料
        function update(id) {

            let tr = "#tr-" + id
            let name = $(tr + " input[name='name']").val()
            let username = $(tr + " input[name='username']").val()
            let tel = $(tr + " input[name='tel']").val()
            let email = $(tr + " input[name='email']").val()
            let self_text = $(tr + " input[name='self_text']").val()
            let addr = $(tr + " input[name='addr']").val()
            // console.log(name, username, tel, email, self_text, addr)

            $.post("./api/update.php", {
                id,
                name,
                username,
                tel,
                email,
                self_text,
                addr
            }, function(res) {
                // console.log(res);
                location.reload()
            })
        }
        //更新求職狀態
        function update2(id) {

            let tr = "#tr2-" + id
            let sen = $(tr + " input[name='sen']").val()
            let job_type = $(tr + " input[name='job_type']").val()
            let salary = $(tr + " input[name='salary']").val()
            let job_offr = $(tr + " input[name='job_offr']").val()
            let job_site = $(tr + " input[name='job_site']").val()
            let lan = $(tr + " input[name='lan']").val()
            let skill = $(tr + " input[name='skill']").val()
            // console.log(id, sen, job_type, salary, job_offr, job_site, lan, skill)

            $.post("./api/update2.php", {
                id,
                sen,
                job_type,
                salary,
                job_offr,
                job_site,
                lan,
                skill
            }, function(res) {
                console.log(res);
                location.reload()
            })
        }
        //更新經歷
        function update3(id) {

            let tr = "#tr3-" + id
            let job_name = $(tr + " input[name='job_name']").val()
            let com_name = $(tr + " input[name='com_name']").val()
            let job_content = $(tr + " input[name='job_content']").val()
            let from_year = $(tr + " input[name='from_year']").val()
            let from_mon = $(tr + " input[name='from_mon']").val()
            let to_year = $(tr + " input[name='to_year']").val()
            let to_mon = $(tr + " input[name='to_mon']").val()
            // console.log(id, job_name, com_name, job_content, from_year, from_mon, to_year, to_mon)

            $.post("./api/update3.php", {
                id,
                job_name,
                com_name,
                job_content,
                from_year,
                from_mon,
                to_year,
                to_mon
            }, function(res) {
                console.log(res);
                location.reload()
            })
        }
        //更新學歷
        function update4(id) {

            let tr = "#tr4-" + id
            let school = $(tr + " input[name='school']").val()
            let education = $(tr + " input[name='education']").val()
            let major = $(tr + " input[name='major']").val()
            let from_year = $(tr + " input[name='from_year']").val()
            let to_year = $(tr + " input[name='to_year']").val()
            let text = $(tr + " input[name='text']").val()
            // console.log(id, school, education, major, from_year, to_year, text)

            $.post("./api/update4.php", {
                id,
                school,
                education,
                major,
                from_year,
                to_year,
                text
            }, function(res) {
                // console.log(res);
                location.reload()
            })
        }
    </script>
</body>

</html>