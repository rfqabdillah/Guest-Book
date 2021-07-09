function hitungTot() {
	var har1 = document.mform.har1.value;
	var har2 = document.mform.har2.value;
	var har3 = document.mform.har3.value;
	var har5 = document.mform.har5.value;
	var har6 = document.mform.har6.value;
	var har7 = document.mform.har7.value;
	var har8 = document.mform.har8.value;
	var har9 = document.mform.har9.value;

	var jmlApple1 = document.mform.Apple1.value;
	var jmlAsus1 = document.mform.Asus1.value;
	var jmlAsus2 = document.mform.Asus2.value;
	var jmlAsus4 = document.mform.Asus4.value;
	var jmlKingston1 = document.mform.Kingston1.value;
	var jmlKingston2 = document.mform.Kingston2.value;
	var jmlJBL1 = document.mform.JBL1.value;
	var jmlDA1 = document.mform.DA1.value;

	var totApple1;
	var totAsus1; 
	var totAsus2; 
	var totAsus4; 
	var totKingston1;
	var totKingston2; 
	var totDA1; 
	var totJBL1;

	if(jmlApple1>0){
        totApple1 = jmlApple1 * har1;
    }else{
        totApple1 = 0; 
	}
	if(jmlAsus1>0){
        totAsus1 = jmlAsus1 * har2;
    }else{
        totAsus1 = 0; 
	}
	if(jmlAsus2>0){
        totAsus2 = jmlAsus2 * har3;
    }else{
        totAsus2 = 0; 
	}
	if(jmlAsus4>0){
        totAsus4 = jmlAsus4 * har5;
    }else{
        totAsus4 = 0; 
	}
	if(jmlKingston1>0){
        totKingston1 = jmlKingston1 * har6;
    }else{
        totKingston1 = 0; 
	}
	if(jmlKingston2>0){
        totKingston2 = jmlKingston2 * har7;
    }else{
        totKingston2 = 0; 
	}
	if(jmlJBL1>0){
		totJBL1 = jmlJBL1 * har8;
	}else{
		totJBL1 = 0; 
	}
	if(jmlDA1>0){
        totDA1 = jmlDA1 * har9;
    }else{
        totDA1 = 0; 
	}
	
	document.getElementById("har-bar1").value = "IDR "+totApple1;
	document.getElementById("har-bar2").value = "IDR "+totAsus1;
	document.getElementById("har-bar3").value = "IDR "+totAsus2;
	document.getElementById("har-bar4").value = "IDR "+totAsus4;
	document.getElementById("har-bar5").value = "IDR "+totKingston1;
	document.getElementById("har-bar6").value = "IDR "+totKingston2;
	document.getElementById("har-bar7").value = "IDR "+totJBL1;
	document.getElementById("har-bar8").value = "IDR "+totDA1;
	var totAkhir = totApple1 + totAsus1 + totAsus2 + totAsus4 + totKingston1 + totKingston2 + totDA1 + totJBL1;
	document.mform.total.value = "IDR " +totAkhir;

	var member = document.mform.member.checked;
	var harAkhir;
	var diskon;

	harAkhir = totAkhir;
	if(member==true){
        diskon = totAkhir * 0.05;
        harAkhir = harAkhir - diskon;
        document.mform.diskon.value = "IDR "+diskon;
        document.mform.jumlah.value = "IDR "+harAkhir;
    }else{
        document.mform.diskon.value = "IDR 0";
        document.mform.jumlah.value = "IDR "+harAkhir;
    }
}
function reset(){
window.location='shopcart.html';
}