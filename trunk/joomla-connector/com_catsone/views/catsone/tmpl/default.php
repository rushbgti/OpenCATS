<?php
/**
 * $Id: default.php 10094 2008-03-02 04:35:10Z instance $
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<form action="index.php?option=com_catsone" method="post" name="adminForm">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
	<thead>
		
	</thead>
<table cellpadding=0 cellspacing=0 width=100%>
   <tr>
     <td width=100% bgcolor='#efefef' height=30>
       <center>
          <b>List of jobs follow : </b>
       </center>
     </td>
   </tr>
   <tr>
			<td align="right" colspan="6">
			<?php 
				echo JText::_('Display Num') .'&nbsp;';
				echo $this->pagination->getLimitBox();
		    ?>
			</td>
		</tr>
		<?
			$jobType = Jrequest::getVar('jobType');
			if($jobType!="")
			{
				$link = "index.php?option=com_catsone&jobType=".$jobType;
			}
			else
			{
				$link = "index.php?option=com_catsone";
			}
		?>
   <tr>
      <td width=100% style='padding:10px;'>
         <table cellpadding=0 cellspacing=0 width=100% style='border:1px solid #efefef;padding:10px;'>
           <tr>
             <td width=5% style='text-align:center;font-weight:bold;border-right:1px solid white;height:25px;' bgcolor='#efefef'>
             	<b>#</b>
             </td>
             <td style='text-align:center;border-right:1px solid white;' bgcolor='#efefef'>
                 <b>Name of job</b>
             </td>
             <td style='text-align:center;border-right:1px solid white;' bgcolor='#efefef'>
                 <b>Start date</b>
             </td>
             <td style='text-align:center;border-right:1px solid white;' bgcolor='#efefef'>
                 <a href='<?=$link."&orderby=city"?>'><b>City</b></a>
             </td>      
             <td style='text-align:center;border-right:1px solid white;' bgcolor='#efefef'>
                 <a href='<?=$link."&orderby=state"?>'><b>State</b></a>
             </td>  
             <td style='text-align:center;border-right:1px solid white;' bgcolor='#efefef'>
                 <b>Type</b>
             </td>  			 
             <td style='text-align:center;' bgcolor='#efefef' width=7%>
                 <b>Apply</b>
             </td>         
           </tr>
           <?php
           $catsone = $this->catsone;
           for($i=0;$i<count($catsone);$i++)
           {
           	if($i % 2 ==0)
           	{
           		$bgcolor = "white";
           	}
           	else {
           		$bgcolor = "#eeeeee";
           	}
           	?>
           	  <tr>
           	    <td bgcolor='<?=$bgcolor?>' height=20 style='border-right:1px solid white;'>
           	      <center>
           	       <?=$i+1?>
           	      </center>
           	    </td>
           	    <td bgcolor='<?=$bgcolor?>' style='padding-left:10px;border-right:1px solid white;'>
           	      <a href='<? echo Jroute::_('index.php?option=com_catsone&task=details&id='.$catsone[$i]->joborder_id);?>'><?=$catsone[$i]->title?></a>
           	    </td>
           	    <td bgcolor='<?=$bgcolor?>' style='padding-left:20px;border-right:1px solid white;'>
           	      <?=$catsone[$i]->start_date?>
           	    </td>
           	    <td bgcolor='<?=$bgcolor?>' style='text-align:center;border-right:1px solid white;'>
           	      <?=$catsone[$i]->city?>
           	    </td>
           	    <td bgcolor='<?=$bgcolor?>' style='text-align:center;border-right:1px solid white;'>
           	      <?=$catsone[$i]->state?>
           	    </td>
				<td bgcolor='<?=$bgcolor?>' style='text-align:center;border-right:1px solid white;'>
					 <?php
									if($catsone[$i]->type=="H")
									{
										echo "Hire";
									}
									elseif($catsone[$i]->type=="C2H")
									{
										echo "Contact to hire";
									}
									elseif($catsone[$i]->type=="C")
									{
										echo "Contact";
									}
									elseif($catsone[$i]->type=="FL")
									{
										echo "Freelancer";
									}
								  ?>
           	    </td>
           	    <td bgcolor='<?=$bgcolor?>' style='text-align:center;'>
           	  	  <center><a href='index.php?option=com_catsone&task=apply&id=<?=$catsone[$i]->joborder_id?>'>Apply</a></center>
           	    </td>
           	  </tr>
           	<?
           }
           ?>
         </table>
      </td>
   </tr>
		<tr>
			<td align="center" colspan="6" class="sectiontablefooter" height=20 width=100%>
				<?php
					echo $this->pagination->getPagesLinks(); 
				?>
			</td>
		</tr>
		<tr>
			<td colspan="6" align="right" height=20 width=100%>
				<?php echo $this->pagination->getPagesCounter(); ?>
			</td>
		</tr>
</table>
<input type="hidden" name="option" value="com_catsone" />
<input type="hidden" name="jobType" value="<?php echo $this->jobType;?>" />
</form>
</div>