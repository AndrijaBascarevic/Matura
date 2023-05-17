function Sort()
{
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("tabela");
        switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
          // Start by saying: no switching is done:
          switching = false;
          rows = table.rows;
          /* Loop through all table rows (except the
          first, which contains table headers): */
          for (i = 1; i < (rows.length); i++) {
            // Start by saying there should be no switching:
            shouldSwitch = false;
            /* Get the two elements you want to compare,
            one from current row and one from the next: */
            x = rows[i].getElementsByTagName("TD")[4];
            y = rows[i + 1].getElementsByTagName("TD")[4];
            // Check if the two rows should switch place:
            if (x.innerHTML < y.innerHTML) {
              // If so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          }
          if (shouldSwitch) {
            /* If a switch has been marked, make the switch
            and mark that a switch has been done: */
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
          }
        }
}
function Oboji()
{
    var table = document.getElementById("tabela");
    var rows = table.rows;
    for(i=0;i<rows.length;i++)
    {
        if(i%2!=0)
        {
            rows[i].classList.add("boja");
        }
    }
}
function Prosli()
{
    var table = document.getElementById("tabela");
    var rows = table.rows;
    for(i=1;i<rows.length;i++)
    {
        if(rows[i].getElementsByTagName("TD")[4].innerHTML>50)
        {
            rows[i].classList.add("prosli");
        }
    }
}
function NeProsli()
{
    var table = document.getElementById("tabela");
    var rows = table.rows;
    for(i=1;i<rows.length;i++)
    {
        if(rows[i].getElementsByTagName("TD")[4].innerHTML<50)
        {
            rows[i].classList.add("neprosli");
        }
    }
}
function Izdvoji()
{
    var table = document.getElementById("tabela");
    var rows = table.rows;
    for(i=1;i<rows.length;i++)
    {
        if(rows[i].getElementsByTagName("TD")[4].innerHTML<50)
        {
            table.deleteRow(i);
        }
    }
    Sort();
}