<div class="card">
    <div class="card-header">
        <h3>لیست مطالب</h3>
        <a href=""><button type="button" class="btn btn-warning float-left">ایجاد مطلب جدید</button> </a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>آی دی</th>
                <th>عنوان</th>
                <th>نام مستعار</th>
                <th>خلاصه توضیحات</th>
                <th>وضعیت مطلب</th>
                <th>تعداد بازدید</th>
            </tr>
            </thead>
            <tbody>
{{--            @foreach($users as $user)--}}
{{--                <tr>--}}
{{--                    <td>{{$user->id}}</td>--}}
{{--                    <td>{{$user->name}}</td>--}}
{{--                    <td>{{$user->email}}</td>--}}
{{--                    <td>--}}
{{--                        @if($user->email_verified_at != null)--}}
{{--                            <button type="button" class="btn btn-success btn-rounded btn-fw">فعال</button>--}}
{{--                        @else--}}
{{--                            <button type="button" class="btn btn-warning btn-rounded btn-fw">غیرفعال</button>--}}
{{--                        @endif--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        @if($user->role == 'admin')--}}
{{--                            <span class="text-danger font-weight-bold">{{$user->role}}</span>--}}
{{--                        @else--}}
{{--                            <span class="text-center font-weight-bold">{{$user->role}}</span>--}}
{{--                        @endif--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
            </tbody>
        </table>
{{--        {{$->links()}}--}}
    </div>
</div>
