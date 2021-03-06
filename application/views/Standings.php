<h2>League Standings</h2>

<form method ="post" action="/Standings/data" name="sortLeague">
    Sort By: 
    <select name="sortReq1">
        <option value="league">League</option>
        <option value="conference">Conference</option>
        <option value="division">Division</option>
    </select>
    <select name="sortReq2">
        <option value="city">City</option>
        <option value="team">Team</option>
        <option value="standing">Standing</option>
    </select>
    
    <input type="submit" value="Go">
</form><br/>

{league}
<table class="table table-hover table-striped">
    

    <header class="panel-heading danger"> {conference} </header>
    
    {region}
    <tr>
        <td class = "success">{division}</td>
        <td class = "success"></td>
        <td class = "success">W</td>
        <td class = "success">L</td>
        <td class = "success">T</td>
    <tr/>
    
    {teams}
    <tr>
        <td><img class="league-table-img" src="/img/logos/{filename}" title="{name}"/></td>
        <td><span title="{code}">{name}</span></td>
        <td>{wins}</td>
        <td>{losses}</td>
        <td>{ties}</td>
    </tr>

    {/teams}
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>       
    </tr>   
    {/region}
    <tr>
        
    </tr>
</table>
{/league} 
