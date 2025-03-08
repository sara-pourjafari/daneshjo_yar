<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام دانشجو</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* رنگ پس‌زمینه ملایم */
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px; /* حداکثر عرض فرم */
            margin: auto; /* مرکز کردن فرم */
            margin-top: 50px; /* فاصله از بالا */
        }
        .btn-primary {
            background-color: #007bff; /* رنگ دکمه */
            border: none;
        }
        .form-row {
            margin-bottom: 15px; /* فاصله بین ردیف‌ها */
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2 class="text-center mb-4">فرم ثبت نام دانشجو</h2>
        <form action={{route('Register')}} method="POST" enctype="multipart/form-data">
           @csrf
            <div class="form-row">
                <div class="col">
                    <label for="firstName">نام:</label>
                    <input type="text" id="firstName" class="form-control" name="FirstName">
                </div>
                <div class="col">
                    <label for="lastName">نام خانوادگی:</label>
                    <input type="text" id="lastName"  class="form-control" name="LastName">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="studentId">شماره دانشجویی:</label>
                    <input type="text" id="studentId"  class="form-control" name="Student_Number">
                </div>
                <div class="col">
                    <label for="number">شماره همراه:</label>
                    <input type="tel" id="number"  class="form-control" name="phone_Number">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="date_of_birth">تاریخ تولد:</label>
                    <input type="date" id="date_of_birth"  class="form-control" name="date_of_birth">
                </div>
                <div class="col">
                    <label for="national_code">کد ملی:</label>
                    <input type="text" id="national_code" class="form-control" name="national_id">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="major">رشته تحصیلی:</label>
                    <input type="text" id="major" required class="form-control" name="field_of_study">
                </div>
            </div>
            <div class="form-group">
                <label for="photo">عکس:</label>
                <input type="file" id="photo" accept="image/*" required class="form-control-file" name="img">
            </div>
            <button type="submit" class="btn btn-primary btn-block">ثبت نام</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>

