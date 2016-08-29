<h3>การอบรม</h3>
<p>
    ทางคณะวิศวกรรมศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย ได้เปิดการอบรมเพื่อเตรียมพร้อมสำหรับการแข่งขัน ACM-ICPC 2016 ระดับภูมิภาค ภาคกลางเขต 1  ดังตารางต่อไปนี้
</p>
<table class="table table-bordered">
    <tr class="table-header">
        <th>วัน</th>
        <th>เวลา</th>
        <th>สถานที่</th>
        <th>หัวข้อการอบรม</th>
        <th>วิทยากร</th>
        <th>เอกสารประกอบการอบรม</th>
    </tr>
    <tr>
        <td>วันเสาร์ 27 สิงหาคม 2559</td>
        <td>8.00 น. - 17.00 น.</td>
        <td>ห้องอบรมชั้น 2 อาคาร 100 ปี</td>
        <td>อบรมและฝึกซ้อมเทคนิคต่างๆ เพื่อการแข่งขัน</td>
        <td>ผศ.ดร.นัทที นิภานันท์</td>
        <td>
            <a>
                <span class="glyphicon glyphicon-download-alt"></span> Download
            </a>
        </td>
    </tr>
    <tr>
        <td>วันอาทิตย์ 28 สิงหาคม 2559</td>
        <td>8.00 น. - 17.00 น.</td>
        <td>ห้องอบรมชั้น 2 อาคาร 100 ปี</td>
        <td>State Space Searching Algorithm</td>
        <td>ผศ.ดร.สุกรี สินธุภิญโญ</td>
        <td>
            <a>
                <span class="glyphicon glyphicon-download-alt"></span> Download
            </a>
        </td>
    </tr>
    <tr>
        <td>วันเสาร์ 3 กันยายน 2559</td>
        <td>8.00 น. - 17.00 น.</td>
        <td>ห้องประชุมชั้น 2 ตึก 4</td>
        <td>String Matching Algorithm</td>
        <td>อาจารย์ ดร.พิชญะ สิทธีอมร</td>
        <td>
            <a>
                <span class="glyphicon glyphicon-download-alt"></span> Download
            </a>
        </td>
    </tr>
    <tr>
        <td>วันอาทิตย์ 4 กันยายน 2559</td>
        <td>8.00 น. - 17.00 น.</td>
        <td>ห้องประชุมชั้น 2 ตึก 4</td>
        <td>Dynamic Programming</td>
        <td>ผศ.ดร.ณัฐพงศ์ ชินธเนศ</td>
        <td>
            <a>
                <span class="glyphicon glyphicon-download-alt"></span> Download
            </a>
        </td>
    </tr>
</table>

<p><a href="https://goo.gl/maps/KgA9n" target="_blank">คลิกที่นี่เพื่อดูตำแหน่งสถานที่ใน Google Maps</a></p>

<div class="col-md-8 col-md-offset-2">
    <p>ผู้สนใจสามารถลงทะเบียนเข้าร่วมการอบรมได้จากแบบฟอร์มต่อไปนี้ <b>รับจำนวนจำกัด ภายในวันพุธที่ 24 สิงหาคม 2559</b></p>
</div>
<div class="col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
    @if (session('register-success'))
        <div id="prep-course-submit-success" class="alert alert-success prep-course-alert">
            {{ session('register-success') }}
        </div>
    @endif
    @if (session('register-error'))
        <div id="prep-course-submit-error" class="alert alert-danger prep-course-alert">
            {{ session('register-error') }}
        </div>
    @endif
    <form class="form prep-course-form" id="prep-course-form" method="post" action="{{ url('2016/thailand/central-a/prep-course/register') }}">
        {{ csrf_field() }}
        <input class="form-control" type="text" id="name" name="name" placeholder="ชื่อ" value="{{ old('name') }}" required>
        <input class="form-control" type="text" id="surname" name="surname" placeholder="นามสกุล" value="{{ old('surname') }}" required>
        <input class="form-control" type="text" id="institute" name="institute" placeholder="สถาบัน" value="{{ old('institute') }}" required>
        <input class="form-control" type="email" id="email" name="email" placeholder="อีเมล" value="{{ old('email') }}" required>
        <input class="form-control" type="tel" id="tel" name="tel" placeholder="โทรศัพท์" value="{{ old('tel') }}" required>
        <button type="submit" id="prep-course-btn" class="btn btn-primary btn-block">สมัครเข้าร่วม</button>
    </form>
</div>
<div class="col-md-8 col-md-offset-2">
    <p>
        <b>หมายเหตุ:</b>
        <ul>
            <li>ที่นั่งมีจำนวนจำกัด</li>
            <li>หากผู้เข้าร่วมการอบรมมีคอมพิวเตอร์ส่วนตัว กรุณานำมาเพื่อการอบรมที่เต็มประสิทธิภาพ</li>
            <li>ลงทะเบียนเข้าร่วมการอบรมเพียงครั้งเดียวต่อการเข้าร่วมการอบรมทั้ง 4 วัน</li>
        </ul>
    </p>
</div>
