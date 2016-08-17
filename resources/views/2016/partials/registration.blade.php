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
    @if (session('register-success'))
        <div class="alert alert-success">
            {{ session('register-success') }}
        </div>
    @endif
    @if (session('register-error'))
        <div class="alert alert-danger">
            <b>มีข้อผิดพลาดเกิดขึ้น</b> {{ session('register-error') }}
        </div>
    @endif
    <form id="registration-form" method="post" action="{{ url('2016/thailand/central-a/register') }}">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <label for="team-name">ชื่อทีม</label>
                <input class="form-control" type="text" id="team-name" name="team-name" placeholder="" value="{{ old('team-name') }}" required>
            </div>
            <div class="col-md-6">
                <label for="institute">สถาบัน/มหาวิทยาลัย</label>
                <input class="form-control" type="text" id="institute" name="institute" placeholder="" value="{{ old('institute') }}" required>
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
                        <label for="member1-title-th">คำนำหน้าชื่อ</label>
                        <input class="form-control" type="text" id="member1-title-th" name="member1-title-th" placeholder="เช่น นาย, นางสาว" value="{{ old('member1-title-th') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="member1-name-th">ชื่อ</label>
                        <input class="form-control" type="text" id="member1-name-th" name="member1-name-th" placeholder="" value="{{ old('member1-name-th') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="member1-surname-th">นามสกุล</label>
                        <input class="form-control" type="text" id="member1-surname-th" name="member1-surname-th" placeholder="" value="{{ old('member1-surname-th') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="member1-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member1-title-en" name="member1-title-en" placeholder="เช่น Mr., Miss" value="{{ old('member1-title-en') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="member1-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member1-name-en" name="member1-name-en" placeholder="" value="{{ old('member1-name-en') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="member1-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member1-surname-en" name="member1-surname-en" placeholder="" value="{{ old('member1-surname-en') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="member1-email">อีเมล</label>
                        <input class="form-control" type="email" id="member1-email" name="member1-email" placeholder="" value="{{ old('member1-email') }}" required>
                    </div>
                    <div class="col-md-2">
                        <label for="member1-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control" type="tel" id="member1-tel" name="member1-tel" placeholder="" value="{{ old('member1-tel') }}" required>
                    </div>
                    <div class="col-md-2">
                        <label for="member1-shirt">ขนาดเสื้อ</label>
                        <select class="form-control" id="member1-shirt" name="member1-shirt" required>≈
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                @if (old('member1-shirt') === $size)
                                    <option value="{{ $size }}" selected>{{ $size }}</option>
                                @else
                                    <option value="{{ $size }}">{{ $size }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="member1-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control" type="text" id="member1-food" name="member1-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ" value="{{ old('member1-food') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        @if (old('member1-attend-prep-course') === 'attend')
                            <input type="checkbox" id="member1-attend-prep-course" name="member1-attend-prep-course" value="attend" checked>
                        @else
                            <input type="checkbox" id="member1-attend-prep-course" name="member1-attend-prep-course" value="attend">
                        @endif
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
                        <label for="member2-title-th">คำนำหน้าชื่อ</label>
                        <input class="form-control" type="text" id="member2-title-th" name="member2-title-th" placeholder="เช่น นาย, นางสาว" value="{{ old('member2-title-th') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="member2-name-th">ชื่อ</label>
                        <input class="form-control" type="text" id="member2-name-th" name="member2-name-th" placeholder="" value="{{ old('member2-name-th') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="member2-surname-th">นามสกุล</label>
                        <input class="form-control" type="text" id="member2-surname-th" name="member2-surname-th" placeholder="" value="{{ old('member2-surname-th') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="member2-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member2-title-en" name="member2-title-en" placeholder="เช่น Mr., Miss" value="{{ old('member2-title-en') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="member2-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member2-name-en" name="member2-name-en" placeholder="" value="{{ old('member2-name-en') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="member2-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member2-surname-en" name="member2-surname-en" placeholder="" value="{{ old('member2-surname-en') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="member2-email">อีเมล</label>
                        <input class="form-control" type="email" id="member2-email" name="member2-email" placeholder="" value="{{ old('member2-email') }}" required>
                    </div>
                    <div class="col-md-2">
                        <label for="member2-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control" type="tel" id="member2-tel" name="member2-tel" placeholder="" value="{{ old('member2-tel') }}" required>
                    </div>
                    <div class="col-md-2">
                        <label for="member2-shirt">ขนาดเสื้อ</label>
                        <select class="form-control" id="member2-shirt" name="member2-shirt" required>
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                @if (old('member2-shirt') === $size)
                                    <option value="{{ $size }}" selected>{{ $size }}</option>
                                @else
                                    <option value="{{ $size }}">{{ $size }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="member2-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control" type="text" id="member2-food" name="member2-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ" value="{{ old('member2-food') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        @if (old('member2-attend-prep-course') === 'attend')
                            <input type="checkbox" id="member2-attend-prep-course" name="member2-attend-prep-course" value="attend" checked>
                        @else
                            <input type="checkbox" id="member2-attend-prep-course" name="member2-attend-prep-course" value="attend">
                        @endif
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
                        <label for="member3-title-th">คำนำหน้าชื่อ</label>
                        <input class="form-control" type="text" id="member3-title-th" name="member3-title-th" placeholder="เช่น นาย, นางสาว" value="{{ old('member3-title-th') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="member3-name-th">ชื่อ</label>
                        <input class="form-control" type="text" id="member3-name-th" name="member3-name-th" placeholder="" value="{{ old('member3-name-th') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="member3-surname-th">นามสกุล</label>
                        <input class="form-control" type="text" id="member3-surname-th" name="member3-surname-th" placeholder="" value="{{ old('member3-surname-th') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="member3-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member3-title-en" name="member3-title-en" placeholder="เช่น Mr., Miss" value="{{ old('member3-title-en') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="member3-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member3-name-en" name="member3-name-en" placeholder="" value="{{ old('member3-name-en') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="member3-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control" type="text" id="member3-surname-en" name="member3-surname-en" placeholder="" value="{{ old('member3-surname-en') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="member3-email">อีเมล</label>
                        <input class="form-control" type="email" id="member3-email" name="member3-email" placeholder="" value="{{ old('member3-email') }}" required>
                    </div>
                    <div class="col-md-2">
                        <label for="member3-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control" type="tel" id="member3-tel" name="member3-tel" placeholder="" value="{{ old('member3-tel') }}" required>
                    </div>
                    <div class="col-md-2">
                        <label for="member3-shirt">ขนาดเสื้อ</label>
                        <select class="form-control" id="member3-shirt" name="member3-shirt" required>
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                @if (old('member3-shirt') === $size)
                                    <option value="{{ $size }}" selected>{{ $size }}</option>
                                @else
                                    <option value="{{ $size }}">{{ $size }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="member3-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control" type="text" id="member3-food" name="member3-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ" value="{{ old('member3-food') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        @if (old('member3-attend-prep-course') === 'attend')
                            <input type="checkbox" id="member3-attend-prep-course" name="member3-attend-prep-course" value="attend" checked>
                        @else
                            <input type="checkbox" id="member3-attend-prep-course" name="member3-attend-prep-course" value="attend">
                        @endif
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
                    <div class="col-md-12">
                        @if (old('coach-registered') === 'registered')
                            <input type="checkbox" id="coach-registered" name="coach-registered" value="registered" checked>
                        @else
                            <input type="checkbox" id="coach-registered" name="coach-registered" value="registered">
                        @endif
                        <label for="coach-registered">เลือกตัวเลือกนี้ หากอาจารย์ผู้ควบคุมทีมท่านนี้เคยสมัครในระบบนี้ไปแล้ว (เลือกเพื่อกรอกใหม่เฉพาะอีเมล)</label>
                    </div>
                </div>
                <div class="row coach-hidden">
                    <div class="col-md-2">
                        <label for="coach-title-th">คำนำหน้าชื่อ</label>
                        <input class="form-control coach-disable" type="text" id="coach-title-th" name="coach-title-th" placeholder="เช่น นาย, นางสาว" value="{{ old('coach-title-th') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="coach-name-th">ชื่อ</label>
                        <input class="form-control coach-disable" type="text" id="coach-name-th" name="coach-name-th" placeholder="" value="{{ old('coach-name-th') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="coach-surname-th">นามสกุล</label>
                        <input class="form-control coach-disable" type="text" id="coach-surname-th" name="coach-surname-th" placeholder="" value="{{ old('coach-surname-th') }}" required>
                    </div>
                </div>
                <div class="row coach-hidden">
                    <div class="col-md-2">
                        <label for="coach-title-en">คำนำหน้าชื่อ (อังกฤษ)</label>
                        <input class="form-control coach-disable" type="text" id="coach-title-en" name="coach-title-en" placeholder="เช่น Mr., Miss" value="{{ old('coach-title-en') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="coach-name-en">ชื่อ (อังกฤษ)</label>
                        <input class="form-control coach-disable" type="text" id="coach-name-en" name="coach-name-en" placeholder="" value="{{ old('coach-name-en') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="coach-surname-en">นามสกุล (อังกฤษ)</label>
                        <input class="form-control coach-disable" type="text" id="coach-surname-en" name="coach-surname-en" placeholder="" value="{{ old('coach-surname-en') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="coach-email">อีเมล <span class="coach-shown">(ต้องเป็นอีเมลที่เคยสมัครแล้วเท่านั้น)</span></label>
                        <input class="form-control" type="email" id="coach-email" name="coach-email" placeholder="" value="{{ old('coach-email') }}" required>
                    </div>
                    <div class="col-md-2 coach-hidden">
                        <label for="coach-tel">หมายเลขโทรศัพท์</label>
                        <input class="form-control coach-disable" type="tel" id="coach-tel" name="coach-tel" placeholder="" value="{{ old('coach-tel') }}" required>
                    </div>
                    <div class="col-md-2 coach-hidden">
                        <label for="coach-shirt">ขนาดเสื้อ</label>
                        <select class="form-control coach-disable" id="coach-shirt" name="coach-shirt" required>
                            @foreach ($shirts as $size => $length)
                                {{-- <option value="{{ $size }}">{{ $size }} - รอบอก {{ $length }}</option> --}}
                                @if (old('coach-shirt') === $size)
                                    <option value="{{ $size }}" selected>{{ $size }}</option>
                                @else
                                    <option value="{{ $size }}">{{ $size }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 coach-hidden">
                        <label for="coach-food">ข้อจำกัดเกี่ยวกับอาหาร</label>
                        <input class="form-control coach-disable" type="text" id="coach-food" name="coach-food" placeholder="เช่น แพ้กุ้ง, ทานมังสวิรัติ" value="{{ old('coach-food') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" id="btn-submit" class="btn btn-default btn-submit btn-block">สมัคร</button>
            </div>
        </div>
    </form>
</div>

@push('script')
<script type="text/javascript">
    function checkCoachRegistered() {
        if ($('#coach-registered').is(':checked')) {
            $('.coach-hidden').hide();
            $('.coach-shown').show();
            $('.coach-disable').prop('disabled', true);
        } else {
            $('.coach-hidden').show();
            $('.coach-shown').hide();
            $('.coach-disable').prop('disabled', false);
        }
    }
    $(document).ready(function() {
        checkCoachRegistered();
        $('.coach-shown').hide();
        $('#coach-registered').change(function() {
            checkCoachRegistered();
        });
        $('#registration-form').submit(function() {
            $('#btn-submit').prop('disabled', true);
        });
    });
</script>
@endpush
