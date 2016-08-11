<h3 style="text-align:center;">ลงทะเบียน</h3>

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
        <ul class="nav nav-tabs">
            <li class="active"><a href="##member1-form">สมาชิกทีมคนที่ 1</a></li>
            <li><a href="##member2-form">สมาชิกทีมคนที่ 2</a></li>
            <li><a href="##member3-form">สมาชิกทีมคนที่ 3</a></li>
            <li><a href="##coach-form">อาจารย์ผู้ควบคุมทีม</a></li>            
        </ul>
        <div class="tab-content">
            <div id="member1-form" class="tab-pane active">
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
                        <input class="form-control" type="email" name="member1-email" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox" name="member1-attend-prep-course" value="">
                        <span>สมัครอบรมเตรียมความพร้อมสำหรับสมาชิกทีมคนที่ 1 <a href="{{ url('/2016/thailand/central-a#prep-course') }}" target="_blank">(ดูข้อมูลเกี่ยวกับการอบรม)</a></span>
                    </div>
                </div>
            </div>
            <div id="member2-form" class="tab-pane">
                <div class="row">
                    <div class="col-md-6">
                        <label for="member2-name">ชื่อ</label>
                        <input class="form-control" type="text" name="member2-name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member2-surname">นามสกุล</label>
                        <input class="form-control" type="text" name="member2-surname" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="member2-name-en">ชื่อ (ภาษาอังกฤษ)</label>
                        <input class="form-control" type="text" name="member2-name-en" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member2-surname-en">นามสกุล (ภาษาอังกฤษ)</label>
                        <input class="form-control" type="text" name="member2-surname-en" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="member2-email">อีเมล</label>
                        <input class="form-control" type="email" name="member2-email" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox" name="member2-attend-prep-course" value="">
                        <span>สมัครอบรมเตรียมความพร้อมสำหรับสมาชิกทีมคนที่ 2 <a href="{{ url('/2016/thailand/central-a#prep-course') }}" target="_blank">(ดูข้อมูลเกี่ยวกับการอบรม)</a></span>
                    </div>
                </div>
            </div>
            <div id="member3-form" class="tab-pane">
                <div class="row">
                    <div class="col-md-6">
                        <label for="member3-name">ชื่อ</label>
                        <input class="form-control" type="text" name="member3-name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member3-surname">นามสกุล</label>
                        <input class="form-control" type="text" name="member3-surname" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="member3-name-en">ชื่อ (ภาษาอังกฤษ)</label>
                        <input class="form-control" type="text" name="member3-name-en" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member3-surname-en">นามสกุล (ภาษาอังกฤษ)</label>
                        <input class="form-control" type="text" name="member3-surname-en" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="member3-email">อีเมล</label>
                        <input class="form-control" type="email" name="member3-email" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox" name="member3-attend-prep-course" value="">
                        <span>สมัครอบรมเตรียมความพร้อมสำหรับสมาชิกทีมคนที่ 3 <a href="{{ url('/2016/thailand/central-a#prep-course') }}" target="_blank">(ดูข้อมูลเกี่ยวกับการอบรม)</a></span>
                    </div>
                </div>
            </div>
            <div id="coach-form" class="tab-pane">
                <div class="row">
                    <div class="col-md-6">
                        <label for="coach-name">ชื่อ</label>
                        <input class="form-control" type="text" name="coach-name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="coach-surname">นามสกุล</label>
                        <input class="form-control" type="text" name="coach-surname" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="coach-name-en">ชื่อ (ภาษาอังกฤษ)</label>
                        <input class="form-control" type="text" name="coach-name-en" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="coach-surname-en">นามสกุล (ภาษาอังกฤษ)</label>
                        <input class="form-control" type="text" name="coach-surname-en" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="coach-email">อีเมล</label>
                        <input class="form-control" type="email" name="coach-email" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default btn-submit">สมัคร</button>
    </form>
</div>