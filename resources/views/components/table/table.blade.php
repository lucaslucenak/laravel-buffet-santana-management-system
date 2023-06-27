<div class="table-responsive" style="margin-top: 100px; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <x-table.table-title>{{$title}}</x-table.table-title>
    {{$slot}}
    <table class="table table-striped">
        <thead>
            {{$thead}}
        </thead>
        <tbody>
            {{$tbody}}
        </tbody>
    </table>
</div>