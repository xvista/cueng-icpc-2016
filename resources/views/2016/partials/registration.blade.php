<h3>ลงทะเบียน</h3>

<div class="col-md-12">
    <form id="registration-form">
        <div class="row">
            <div class="col-md-6">
                <label for="team-name">ชื่อทีม</label>
                <input class="form-control" type="text" name="team-name" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="school">สถาบัน</label>
                <input class="form-control" type="text" name="school" placeholder="">
            </div>
        </div>
        <p>สมาชิกทีมคนที่ 1</p>
        <div class="row">
            <div class="col-md-6">
                <label for="member1-name">ชื่อ</label>
                <input class="form-control" type="text" name="member1-name" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="member1-surname">นามสกุล</label>
                <input class="form-control" type="text" name="member1-surname" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="member1-name-en">ชื่อ (ภาษาอังกฤษ)</label>
                <input class="form-control" type="text" name="member1-name-en" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="member1-surname-en">นามสกุล (ภาษาอังกฤษ)</label>
                <input class="form-control" type="text" name="member1-surname-en" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="member1-email">อีเมล</label>
                <input class="form-control" type="text" name="member1-email" placeholder="">
            </div>
        </div>
        <input type="checkbox" name="attend-prep-course" value="">
        <span>สมัครอบรมเตรียมความพร้อม <a href="{{ url('/2016/thailand/central-a#prep-course') }}" target="_blank">(ดูข้อมูลเกี่ยวกับการอบรม)</a></span>

        <button type="submit" class="btn btn-default btn-submit">สมัคร</button>
    </form>
</div>