
<?php 

$titelgebruiker = fetchSingle('SELECT * FROM `tbltitlegebruiker` WHERE userid = ?  ', ['type' => 'i', 'value' => $userid]);


?>

<?php


?>
<div class=" item-center mx-80 shadow-xl rounded-2xl mt-8">
  
    <div class="overflow-x-auto ">
    <table class="table table-lg">
        <!-- head -->
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>description</th>
            <th>equip</th>
        </tr>
        </thead>
        <?php foreach($titelgebruiker as $titel){ 
            $titels = fetch('SELECT * FROM tbltitels WHERE id = ? ', ['type' => 'i', 'value' => $titel['titleid']]);
            $usertitle = fetch('SELECT * FROM tblgebruiker_profile WHERE userid = ? AND titleid = ? ', ['type' => 'i', 'value' => $userid], ['type'=> 'i', 'value' => $titel['titleid']]);
           
            ?>
        <tbody>
        <!-- row 1 -->
        
        <tr>
            <th><?php echo $titels['id'] ?></th>
            <td><?php echo $titels['name'] ?></td>
            <td><?php echo $titels['description'] ?></td>
            <?php
            if(isset($usertitle['titleid'])) {
             if($usertitle['titleid'] >= 1){ ?>
                <td ><a href="/dashboard/title/user/equip?titleid=<?php echo $titel['titleid']?>&unequip=1"><button class="btn btn-primary">unequip</button></a></td>
            <?php }else{
                ?>
                <td ><a href="/dashboard/title/user/equip?titleid=<?php echo $titel['titleid']?>&unequip=0 ?>"><button class="btn btn-primary">equip</button></a></td>
                <?php
            }
         }else{
            ?>
            <td ><a href="/dashboard/title/user/equip?titleid=<?php echo $titel['titleid']?>&unequip=0"><button class="btn btn-primary">equip</button></a></td>
            <?php
         
         } ?>
        </tr>
        </tbody>
        <?php } ?>
    </table>
    </div>
</div>
