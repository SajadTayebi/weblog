<div class="card">
    <div class="card-header flex-column">
        <h3 class="text-primary">لیست کاربران</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>آی دی</th>
                <th>نام</th>
                <th>آدرس ایمیل</th>
                <th>وضعیت تایید</th>
                <th>سمت کاربر</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->email_verified_at != null)
                            <button type="button" class="btn btn-success btn-rounded btn-fw">فعال</button>
                        @else
                            <button type="button" class="btn btn-warning btn-rounded btn-fw">غیرفعال</button>
                        @endif
                    </td>
                    <td>
                        @if($user->role == 'admin')
                            <span class="text-danger font-weight-bold">{{$user->role}}</span>
                        @else
                            <span class="text-center font-weight-bold">{{$user->role}}</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</div>
