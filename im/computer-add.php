<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Computer-add</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
    
<style>

.form-container {
  border-radius: 5px;
  background-image: url(assets/img/avatars/computer-add4.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 20px;
}

.form-heading{
    width:80%;
	padding-top:0.1%; 
    padding-left :10%; 
    font-family:Times New Roman;	  
}

form{
	font-size:20px;
	font-family:Chaparral Pro;
	background-color:#cccccc;
	width: 100%;
	padding:5%;
	margin: 2%;
	border-radius:20px;
    opacity: 3;
}

.btn{
    width:200px;
    height:50px;
    background-color:#1a1a1a;
    font-size:20px;
    font-family:Times New Roman;
    color: white;
    cursor: pointer;
}

</style>

</head>

<body>
    
<?php
		include 'header.php';
?>

<!---------------------start form---------------------->

<div class="form-container">        
                <div class="form-contain">

    <div class="row">
        <div class="col-md-11 mx-auto">
    
    <form  method="post" action="#"> 
            
                <center>
            <div class="form-heading">
                    <h2 class="text-info">Register of Computer System</h2>
                    <h6>Fill all the fields with correct details.</h6><br>
                </div>
                </center>

        <!-------------------form start--------------------------------------------------->
        
        <div class="form-group row">
            <div class="col-sm-11">
                <b> Computer (Desktop/Laptop/Table pc)</b><br> 
                    <label for="inputcomponent">Components :</label>
                        <ol>
                        <li>Mother Board :</li>
        <table>
            <tbody>
           
                <tr>
                <center>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
               </center>   
                </tr>
                
            </tbody>
        </table>

        <li>Processor - speed :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><input type="text" id="device-available" placeholder="MHZ"  class="form-control" required></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                           <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
        
                    
                </tr>
               
            </tbody>
        </table>

        <li>RAM- Type/Capacity :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><input type="text" id="device-available" placeholder="MB/GB"  class="form-control" required></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                           <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
        
                    
                </tr>
               
            </tbody>
        </table>

        <li>Hard Disk-Capacity :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><input type="text" id="device-available" placeholder="GB"  class="form-control" required></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                           <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
        
                    
                </tr>
               
            </tbody>
        </table>

        <li>Floppy Disk Driver :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>


        <li>CD Driver :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>CD Writer :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>DVD Driver :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>


        <li>DVD Writer :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Blue-Ray Driver :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>VGA Card :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Sound Card :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Capture card :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Modem card :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Ethernet Card :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Wireless Card :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Card Reader :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table></ol>  </form>

        <div class="form-group row">
            <div class="col-sm-11">
                <b>Input Devices</b><br> 
                    <label for="inputcomponent">Components :</label>
                        <ol>
        <li>Key Board :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Mouse :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Microphone :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Web Camera (Internal) :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table></ol>
        </form>

        <div class="form-group row">
            <div class="col-sm-11">
                <b>Output Devices</b><br> 
                    <label for="inputcomponent">Components :</label>
                        <ol>
        <li>Monitor :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>
   
        <li>Speaker :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>
        <li>Headphone :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>
                        </ol></form>
</form>
                        <div class="form-group row">
            <div class="col-sm-11">
                <b>Other Equipments</b><br> 
                    <label for="inputcomponent">Components :</label>
                        <ol>
        <li>External Modem :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Wireless USB Stick :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>UPS:</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Stabilizer:</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Surge protectors :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>

        <li>Others :</li>
        <table>
            <tbody>
           
                <tr>
                    <td><select name="device" id="device-available" class="form-control" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option></td>
                        
                           <td><input type="text" class="form-control" placeholder="Make/Model" id="mboard-model"/></td>
                           <td><input type="text" class="form-control" placeholder="Serial Number" id="mboard-model"/></td>
                          <td><input type="text" placeholder="Warranty From whom" class="form-control"/></td></tr>
               <tr>     <td>Warranty End date<input type="date" placeholder="Warranty End date" class="form-control" onChange="this.setAttribute('value', this.value)" /></td></tr>
                  
                    
                </tr>
               
            </tbody>
        </table>
        <br><br>
        <center> <button class ="btn" type="submit"> Submit</button></center>
       
        </ol></form>
                                 <!--------------------------------------->
                        
                            </div>
                    </div>
                                </ol>
                                
                            
                                </select>
                            
        </div>
                    
                    
            </form>

        </div>
    </div>
</div>
     </div> 
          

        <!--------------------------------------------------------------------->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
    
</body>

</php>