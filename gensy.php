<?php
$text = "Unit 1: Overview of Amazon EC2
Introduction to cloud computing and EC2
Understanding EC2 instances and instance types
Creating and managing EC2 instances
Best practices for EC2 security and access management

Unit 22: Elasticity and Scalability with EC2
Auto Scaling and load balancing
Scaling EC2 instances based on demand
Designing highly available architectures with EC2
Monitoring and optimizing EC2 performance

Unit 3: Storage and Data Management with EC2
Amazon EBS and EFS for persistent storage
Snapshot management and backup strategies
Data transfer and import/export options
Integrating with other AWS storage services

Unit 4: Networking and Security in EC2
Virtual Private Cloud (VPC) and subnets
Security groups and network ACLs
Connecting to EC2 instances using SSH and RDP
VPC peering and VPN connectivity

Unit 5: Advanced Topics in EC2
Docker and containerization with EC2
Serverless computing with AWS Lambda and EC2
Spot Instances and cost optimization
Migrating on-premises applications to EC2

";
$lines = explode("\n", $text);

$length = count($lines);

for($i=0;$i<$length;$i++)
{
	 $aa = '<li class="py-2">';
	 $bb='';
	if(trim($lines[$i]) != '')
	{
		
		if($i == 0)
		{
		 $bb = '<span class="badge badge-circle badge-soft-primary mr-2"><i class="fa fa-circle" aria-hidden="true"></i></span><span class="strong">';	
		}
		else if(trim($lines[$i-1]) == '')
		{
			 $bb = '<span class="badge badge-circle badge-soft-primary mr-2"><i class="fa fa-circle" aria-hidden="true"></i></span><span class="strong">';
		}else{
		 $bb = '<span class="badge badge-circle badge-soft-primary mr-2"><i data-feather=check></i></span><span class="">';
		}
	}
	 $ee=$lines[$i];
	
	 $cc = '</li>';
	$dd = $aa.$bb.$ee.$cc;
	$encodedHtml = htmlspecialchars($dd, ENT_QUOTES);

echo $encodedHtml;
	echo '<br>';
}

?>
