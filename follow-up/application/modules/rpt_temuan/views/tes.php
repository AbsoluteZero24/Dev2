<input list="hosting-plan" type="text" id="id-hosting-plan" onclick="get_row()"/>
<datalist id="hosting-plan">
    <option value="IDSAK">INDONESIA | SANGKAPURA / BAWEAN </option>
    <option value="IDSKI">INDONESIA | SANGKULIRANG, KALIMANTAN </option>
    <option value="IDSNR">INDONESIA | SANUR </option>
</datalist>

<script>
    // Create a new option element.
    var optionNode = document.createElement("option");

    // Set the value
    optionNode.value = "huge";

    // create a text node and append it to the option element
    optionNode.appendChild(document.createTextNode("$50 USD"));

    // Add the optionNode to the datalist
    document.getElementById("hosting-plan").appendChild(optionNode);
</script>

<script>
    function get_row()
    {
        alert($("id-hosting-plan").val());
    }
</script>