<div class="card card-5">
    <div class="card-heading">
        <h2 class="title">{{$formTitle}}</h2>
    </div>
    <div class="card-body">
        <form method="POST">
            {{$formRows}}
            <div>
                <button class="btn btn--radius-2 btn--red btn-register" type="submit" style='background-color:#eec13b;'>{{$buttonName}}</button>
            </div>
        </form>
    </div>
</div>