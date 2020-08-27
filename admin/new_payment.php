<?php
include ('header_student.php');

$rollno = $_SESSION['rollno'];
$sql_select="SELECT * FROM student WHERE rollno='$rollno'";
$res_select = mysqli_query($connect,$sql_select);
$row_select = mysqli_fetch_array($res_select);

//FETCHING TYPE OF PAYMENT AND SUB CODE AND OTHER DETAILS FROM PAYMENT_TYPE TABLE
$sql_payment_type = "SELECT * FROM payment_type";
$res_payment_type = mysqli_query($connect,$sql_payment_type);
$i=0;
while($row_payment_type = mysqli_fetch_array($res_payment_type))
{
	$particular[$i] = $row_payment_type['particular'];
	$amount[$i] = $row_payment_type['amount'];
	$reason_code[$i] = $row_payment_type['reason_code'];
	$sub_code[$i] = $row_payment_type['sub_code'];
	$i++;
}

echo '<form method="POST" action="../ccavenue/ccavRequestHandler.php">';
echo "<div class='table-responsive'>";
echo "<table class='table table-striped'>";
echo "<tr>";
echo '<td>TYPE OF FEES : </td>';
echo '<td><select name="reason_code">';
for($j=0; $j<$i; $j++)
{
echo '<option value='.$reason_code[$j].'>'.$particular[$j] ."   [".$reason_code[$j]."]".'</option>';
}
echo '</select></td>';
echo "</tr>";

echo "<tr>";
echo "<td> SELECT YEAR</td>";
echo '<td><select  name="year"> 
			<option value="FE">FE</option>
			<option value="SE">SE</option>
			<option value="TE">TE</option>
			<option value="BE">BE</option>
			<option value="PASS OUT">PASS OUT</option>         
      </select></td>';
echo "</tr>";

echo "<tr>";
echo '<td>CURRENCY : </td>';
echo '<td><select  name="currency" id="currency"> 
			<option value="INR">INR</option>
		     
      </select></td>';
echo "</tr>";

echo "<tr>";
echo '<td>AMOUNT : </td>';
echo '<td><input type=number name="amount" required><td>';
echo '<input type=hidden name="rollno" value="'.$rollno.'">';

echo "<tr>";
echo '<td></td>';
echo '<td><textarea readonly rows="7" cols="80">
This online payment system is provided by Ramrao Adik Institute of Technology (RAIT) and its third party suppliers. RAIT may update these terms from time to time and any changes will be effective immediately on being set out here. Please ensure you are aware of the current terms.

Terms and Conditions 

Please read these terms carefully before using the online payment facility. Using the online payment facility on this website indicates that you accept these terms. If you do not accept these terms do not use this facility.
All payments are subject to the following conditions:-
• You should hold approval signed by competent authority (Principal, Registrar, Accounts, Student Section, Exam Section) indicating the amount payable by you. The receipt together with approval for payment needs to be submitted to concerned authorities for taking note of your payment. 
• For transcript system the fee payable is Rs.1000/- , hence no preauthorization letter is required.
• Your payment will normally reach RAIT account to which you are making a payment on the following working day.
• We cannot accept liability for a payment not reaching the correct College account due to you quoting an incorrect account number or incorrect personal details.
• Neither can we accept liability if payment is refused or declined by the credit/debit card supplier for any reason.
• If the card supplier declines payment, RAIT is under no obligation to bring this fact to your attention. You should check with your bank/credit/debit card supplier that payment has been deducted from your account.
• In no event will RAIT be liable for any damages whatsoever arising out of the use, inability to use, or the results of use of this site, any websites linked to this site, or the materials or information contained at any or all such sites, whether based on warranty, contract, tort or any other legal theory and whether or not advised of the possibility of such damages.
Refund Policy
• Refunds can only be made in exceptional circumstances and are at the discretion of RAIT registrar. Refunds will be made through cheque on receipt of written application quoting reasons and proofs for claiming refund
• Refunds, if applicable, will only be made to student by cheque and it will not refunded to credit/debit card account , originally used for payment.


Security

All payment details which are entered through this payment gateway are encrypted when the learner, or third party making payment, enters them. Communications to and from the service providers site are encrypted.
RAIT shall not be liable for any failure by the learner or third party making payment of fees to properly protect data from being seen on their screen by other persons or otherwise obtained by such persons, during the online payment process or in respect of any omission to provide accurate information in the course of the online payment process.

Service Provider

Online payments of fees can be made by credit or debit card or Netbanking. These payments are not collected by RAIT directly but by the service provider.
Once payment is received by the service provider in cleared funds, the service provider will contact RAIT to confirm the details of the successful payment made by the learner, or third party making payment. On receipt of this confirmation RAIT will confirm to the learner that the payment has been received and accepted by RAIT. In the event that the learner does not receive confirmation within 14 days of making the payment it is the responsibility of the learner to check with RAIT that the payment has been accepted.
The learner shall remain responsible for the tuition or other fees until such time as the confirmation as referred to above is received from RAIT in relation to each of these (and any outstanding) amounts owed to RAIT.
Data Protection

RAIT will collect (or may already hold) personal data relating to the learner, or third party making payment, including name, date of birth, address and enrolment number of the learner in accordance with its data protection policy.
By agreeing to be bound by these terms and conditions the learner, (and any third party making payment), accepts and consents to his/her personal data, as detailed in clause above, being provided to the service provider for sole purpose of the service provider offering and administering the online payment facility to the learner, or third party making payment.
It is the responsibility of the learner, or third party making payment, to ensure that all personal data provided to or held by RAIT and/or provided to the service provider is clear and accurate. RAIT will not be responsible for any losses suffered by the learner, or third party making payment, as a result of inaccurate information being provided to RAIT or the service provider.
RAIT may use the personal information provided to it to contact the learner, or third party making payment, to clarify or resolve any issues that arise in connection with any online payment made in respect of the fees.

Cancellation Policy

The cancellation policy of RAIT and any subsequent refunds due as a result are contained within the rules and regulations as set out in the appropriate College policy documents..
Contact Details
Should you require any further details at all in relation to any part of the on-line payment process, please contact the Accounts Office ( Shree KY Patil) between the hours of 10am and 4:30pm Monday to Friday 022 27709313

</textarea>
</td>';
echo "</tr><tr>";
echo '<td align="right"><input type="checkbox" name="checkbox_new_payment" required></td>';
echo '<td>I hereby agree to the terms and conditions of payment</td>';
echo "</tr>";

echo "<tr>";
echo '<td colspan="2"><input type="submit" name="submit_new_payment" class="btn btn-primary" value="PAY NOW"></td>';
echo "</tr>";
echo "</table>";
echo "</div>";
echo '</form>';

?>

