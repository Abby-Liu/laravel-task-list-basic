@if (count($errors) > 0)
    <!-- 表單錯誤清單 -->
    <div class="alert alert-danger">
        <strong>哎呀！出了些問題！</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- 注意：errors 變數可用於每個 Laravel 的視圖中。如果沒有驗證錯誤訊息存在，那麼它就會是一個空的 ViewErrorBag 實例。-->
