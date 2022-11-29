<form action="{{url('/scores/store')}}" method="post">
    @csrf
    <div class="form-input">
        <label for="week">Week</label>
        <input type="number" name="week" value="" id="week"/>
    </div>
    <div class="form-input">
        <label for="team_id">Team</label>
        <select name="team_id">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-input">
        <label for="played_data">Played</label>
        <textarea id="played_data" name="played_data"></textarea>
    </div>
    <div class="form-input">
        <label for="benched_data">Benched</label>
        <textarea id="benched_data" name="benched_data"></textarea>
    </div>
    <input type="submit" value="parse">
</form>
