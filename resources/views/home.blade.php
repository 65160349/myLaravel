@extends('layouts.default')
@section('title','form')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="col-md">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Adminlte</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputFname">ชื่อ</label>
                <input type="fname" class="form-control" id="exampleInputFname" placeholder="ชื่อ">
              </div>

              <div class="form-group">
                <label for="exampleInputLname">สกุล</label>
                <input type="lname" class="form-control" id="exampleInputLname" placeholder="นามสกุล">
              </div>

              <div class="form-group">
                <label>วัน/เดือน/ปีเกิด</label>
                <input type="date" class="form-control">
              </div>

              <div class="form-group">
                <label for="exampleInputAge">อายุ</label>
                <input type="age" class="form-control" id="exampleInputAge" placeholder="อายุ">
              </div>

               <label >เพศ</label>
              <div class="form-group">
                <div class="form-check">
                    <input type="radio" name="Gender" class="form-check-input" id="Male">
                    <label class="form-check-label" for="Male">ชาย</label>
                    &emsp;&emsp;&emsp;
                    <input type="radio" name="Gender" class="form-check-input" id="Female">
                    <label class="form-check-label" for="Female">หญิง</label>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputFile">รูปภาพ</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>

              <div>
                <div class="form-group">
                  <label>ที่อยู่</label>
                  <textarea class="form-control" rows="3" placeholder="ใส่ที่อยู่..."></textarea>
                </div>
              </div>

              <div>
                <div class="form-group">
                  <label>สีที่ชอบ</label>
                  <select class="form-control">
                    <option>สีแดง</option>
                    <option>สีชมพู</option>
                    <option>สีส้ม</option>
                    <option>สีเหลือง</option>
                    <option>สีเขียว</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีฟ้า</option>
                    <option>สีม่วง</option>
                    <option>สีขาว</option>
                    <option>สีดำ</option>
                  </select>
                </div>

                <div>
                    <div class="form-group">
                        <label>แนวเพลงที่ชอบ</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Hip-Hop</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" >
                        <label class="form-check-label">Jazz</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" >
                        <label class="form-check-label">Pop</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Classic</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">K-Pop</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">อื่นๆ</label>
                      </div>
                    </div>
                </div>

              </div>
              <label >ยินยอมให้เก็บข้อมูล</label>
              <div class="form-check">

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ยินยอม</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

      </div>
  </section>
  @endsection



