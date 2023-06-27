<div class="card card-5">
    <div class="card-heading">
        <h2 class="title">{{$formTitle}}</h2>
    </div>
    <div class="card-body">
        <form action='{{$registerHref}}' method="GET">
            {{$formRows}}
            <div class="d-flex justify-content-between">
                <a href="{{$goBackHref}}" class="btn btn--radius-2 btn--red btn-register" style='background-color:#424039; color:white;'>Voltar</a>
                <button class="btn btn--radius-2 btn--red btn-register" type="submit" style='background-color:#eec13b; color:white;'>{{$buttonName}}</button>
            </div>
        </form>
    </div>
</div>