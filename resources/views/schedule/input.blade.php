<form action="{{url('/schedule/store')}}" method="post">
    @csrf
    <div class="form-input">
        <label for="week">Week</label>
        <input type="number" name="week" value="" id="week"/>
    </div>
    <div class="form-input">
        <label for="data">Data</label>
        <textarea id="data" name="data"></textarea>
    </div>
    <input type="submit" value="parse">
</form>
