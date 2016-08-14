<?php
    $shirts = [
        'SS' => 1,
        'S' => 1,
        'M' => 1,
        'L' => 1,
        'XL' => 1,
        '2XL' => 1,
        '3XL' => 1,
    ];
?>

<h3 style="text-align:center;">ลงทะเบียน</h3>

<div class="col-md-12">
    <form id="registration-form">
        <div class="row">
            <div class="col-md-6">
                <label for="team-name">ชื่อทีม</label>
                <input class="form-control" type="text" id="team-name" name="team-name" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="institute">สถาบัน/มหาวิทยาลัย</label>
                <input class="form-control" type="text" id="institute" name="institute" placeholder="">
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
                    <div class="col-md-2">
                        <label for="member1-title">คำนำหน้าชื่อ</label>
                        <input class="form-control" type="text" id="member1-title" name="member1-title" placeholder="เช่น นาย, นางสาว">
                    </div>
                    <div class="col-md-4">
                        <label for="member1-name">ชื่อ</label>
                        <input class="form-control" type="text" id="member1-name" name="member1-name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member1-surname">นามสกุล</label>
                        <input class="form-control" type="text" id="member1-surname" name="member1-surname" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="member1-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member1-title-en" name="member1-title-en" placeholder="เช่น Mr., Miss">
                    </div>
                    <div class="col-md-4">
                        <label for="member1-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member1-name-en" name="member1-name-en" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member1-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member1-surname-en" name="member1-surname-en" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="member1-email">อีเมล</label>
                        <input class="form-control" type="email" id="member1-email" name="member1-email" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="member1-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control" type="tel" id="member1-tel" name="member1-tel" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="member1-shirt">ขนาดเสื้อ</label>
                        <select class="form-control" id="member1-shirt" name="member1-shirt">
                            <option selected disabled>เลือกขนาดเสื้อ</option>
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                <option value="{{ $size }}">{{ $size }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="member1-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control" type="text" id="member1-food" name="member1-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox" id="member1-attend-prep-course" name="member1-attend-prep-course" value="">
                        <label for="member1-attend-prep-course">สมัครอบรมเตรียมความพร้อมสำหรับสมาชิกทีมคนที่ 1 <a href="{{ url('/2016/thailand/central-a#prep-course') }}" target="_blank">(ดูข้อมูลเกี่ยวกับการอบรม)</a></label>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-warning">
                            <b>หมายเหตุสำหรับการอบรม:</b>
                            <ul>
                                <li>การอบรมมีที่นั่งจำนวนจำกัด</li>
                                <li>หากผู้เข้าร่วมการอบรมมีคอมพิวเตอร์ส่วนตัว กรุณานำมาเพื่อการอบรมที่เต็มประสิทธิภาพ</li>
                                <li>ลงทะเบียนเข้าร่วมการอบรมเพียงครั้งเดียวต่อการเข้าร่วมการอบรมทั้ง 4 วัน</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="member2-form" class="tab-pane">
                <div class="row">
                    <div class="col-md-2">
                        <label for="member2-title">คำนำหน้าชื่อ</label>
                        <input class="form-control" type="text" id="member2-title" name="member2-title" placeholder="เช่น นาย, นางสาว">
                    </div>
                    <div class="col-md-4">
                        <label for="member2-name">ชื่อ</label>
                        <input class="form-control" type="text" id="member2-name" name="member2-name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member2-surname">นามสกุล</label>
                        <input class="form-control" type="text" id="member2-surname" name="member2-surname" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="member2-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member2-title-en" name="member2-title-en" placeholder="เช่น Mr., Miss">
                    </div>
                    <div class="col-md-4">
                        <label for="member2-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member2-name-en" name="member2-name-en" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member2-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member2-surname-en" name="member2-surname-en" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="member2-email">อีเมล</label>
                        <input class="form-control" type="email" id="member2-email" name="member2-email" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="member2-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control" type="tel" id="member2-tel" name="member2-tel" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="member2-shirt">ขนาดเสื้อ</label>
                        <select class="form-control" id="member2-shirt" name="member2-shirt">
                            <option selected disabled>เลือกขนาดเสื้อ</option>
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                <option value="{{ $size }}">{{ $size }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="member2-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control" type="text" id="member2-food" name="member2-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox" id="member2-attend-prep-course" name="member2-attend-prep-course" value="">
                        <label for="member2-attend-prep-course">สมัครอบรมเตรียมความพร้อมสำหรับสมาชิกทีมคนที่ 2 <a href="{{ url('/2016/thailand/central-a#prep-course') }}" target="_blank">(ดูข้อมูลเกี่ยวกับการอบรม)</a></label>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-warning">
                            <b>หมายเหตุสำหรับการอบรม:</b>
                            <ul>
                                <li>การอบรมมีที่นั่งจำนวนจำกัด</li>
                                <li>หากผู้เข้าร่วมการอบรมมีคอมพิวเตอร์ส่วนตัว กรุณานำมาเพื่อการอบรมที่เต็มประสิทธิภาพ</li>
                                <li>ลงทะเบียนเข้าร่วมการอบรมเพียงครั้งเดียวต่อการเข้าร่วมการอบรมทั้ง 4 วัน</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="member3-form" class="tab-pane">
                <div class="row">
                    <div class="col-md-2">
                        <label for="member3-title">คำนำหน้าชื่อ</label>
                        <input class="form-control" type="text" id="member3-title" name="member3-title" placeholder="เช่น นาย, นางสาว">
                    </div>
                    <div class="col-md-4">
                        <label for="member3-name">ชื่อ</label>
                        <input class="form-control" type="text" id="member3-name" name="member3-name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member3-surname">นามสกุล</label>
                        <input class="form-control" type="text" id="member3-surname" name="member3-surname" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="member3-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member3-title-en" name="member3-title-en" placeholder="เช่น Mr., Miss">
                    </div>
                    <div class="col-md-4">
                        <label for="member3-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member3-name-en" name="member3-name-en" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="member3-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member3-surname-en" name="member3-surname-en" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="member3-email">อีเมล</label>
                        <input class="form-control" type="email" id="member3-email" name="member3-email" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="member3-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control" type="tel" id="member3-tel" name="member3-tel" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="member3-shirt">ขนาดเสื้อ</label>
                        <select class="form-control" id="member3-shirt" name="member3-shirt">
                            <option selected disabled>เลือกขนาดเสื้อ</option>
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                <option value="{{ $size }}">{{ $size }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="member3-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control" type="text" id="member3-food" name="member3-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox" id="member3-attend-prep-course" name="member3-attend-prep-course" value="">
                        <label for="member3-attend-prep-course">สมัครอบรมเตรียมความพร้อมสำหรับสมาชิกทีมคนที่ 3 <a href="{{ url('/2016/thailand/central-a#prep-course') }}" target="_blank">(ดูข้อมูลเกี่ยวกับการอบรม)</a></label>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-warning">
                            <b>หมายเหตุสำหรับการอบรม:</b>
                            <ul>
                                <li>การอบรมมีที่นั่งจำนวนจำกัด</li>
                                <li>หากผู้เข้าร่วมการอบรมมีคอมพิวเตอร์ส่วนตัว กรุณานำมาเพื่อการอบรมที่เต็มประสิทธิภาพ</li>
                                <li>ลงทะเบียนเข้าร่วมการอบรมเพียงครั้งเดียวต่อการเข้าร่วมการอบรมทั้ง 4 วัน</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="coach-form" class="tab-pane">
                <div class="row">
                    <div class="col-md-2">
                        <label for="coach-title">คำนำหน้าชื่อ</label>
                        <input class="form-control" type="text" id="coach-title" name="coach-title" placeholder="เช่น นาย, นางสาว">
                    </div>
                    <div class="col-md-4">
                        <label for="coach-name">ชื่อ</label>
                        <input class="form-control" type="text" id="coach-name" name="coach-name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="coach-surname">นามสกุล</label>
                        <input class="form-control" type="text" id="coach-surname" name="coach-surname" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="coach-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="coach-title-en" name="coach-title-en" placeholder="เช่น Mr., Miss">
                    </div>
                    <div class="col-md-4">
                        <label for="coach-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="coach-name-en" name="coach-name-en" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="coach-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control" type="text" id="coach-surname-en" name="coach-surname-en" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="coach-email">อีเมล</label>
                        <input class="form-control" type="email" id="coach-email" name="coach-email" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="coach-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control" type="tel" id="coach-tel" name="coach-tel" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label for="coach-shirt">ขนาดเสื้อ</label>
                        <select class="form-control" id="coach-shirt" name="coach-shirt">
                            <option selected disabled>เลือกขนาดเสื้อ</option>
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                <option value="{{ $size }}">{{ $size }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="coach-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control" type="text" id="coach-food" name="coach-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-default btn-submit btn-block">สมัคร</button>
            </div>
        </div>
    </form>
</div>
