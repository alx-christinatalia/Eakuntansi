//var geturl = window.location.href;
//var arr = url.split("/");
var base_url = /enotaris/;
//console.log(window.location.href)
//console.log(window.location.href+"enotaris")
//var base_url = window.location.hostname;
var m_kywd="" , m_utama ="", m_table="";
$(document).ready(function() {
    get_admin();
    ourToolTIP()
    myProvKot();
    $('[data-toggle="tooltip"]').tooltip();   
    get_notaris();
    get_admin();
    txtarea();
    myDate();
    today()
    formatDate1();
    myMoney();
    mySelect2();
    myKabKota()
    $.post(base_url+'kalender/jumlah_reminder', function (data) {
        $("#jumlah_remind").append(data);
    });
});

//Langsung Buat select2
    function mySelect2()
    {
        $(".mySelect2").each(function(){
            $(this).select2()
        })
    }

//Langsung Buat provinsi dan Kota
    function myProvKot()
    {
        return $.ajax({
            type:'post',
            url:base_url+'umum/dropdown_provinsi',
            dataType:'json',
            success : function (resp)
            {
                $(".prov").each(function(){
                    $(this).html(resp);
                })
                    mySelect2();
            }
        })
    }

    $(".prov").change(function(){

            myKabKota()
        })
    function myKabKota()
    {
            provinsi_id = $(".prov option:selected").val();
            return $.ajax({
                type:'post',
                url:base_url+'umum/getKabKota/'+provinsi_id,
                dataType:'json',
                success : function (resp)
                {

                    $(".kota").each(function(){
                      $(this).html((resp == "" ? "<option value=\"\" >-- Pilih Kota ---</option>" : resp));
                    })
                      mySelect2();  
                }
            })
    }


//Langsung buat TGL dengan Class myDate
    function myDate()
    {
        mydate = 0;
        $(".myDate").each(function()
        {
            id = $(this).attr('id');
            dateVal = $("#"+id);
            $(this).attr('onblur','FormatDateField(this)')
            $(this).attr('onfocus','this.select()')
            $(this).attr('autocomplete','off')
            //$(this).attr('id','myDate_'+mydate+", "+id)
            $("#"+id).datepicker({ dateFormat: 'dd-M-yy' }).val();
            dateVal .val((dateVal.val() == "01-Jan-1970"? "" : dateVal.val()))
            mydate++;
        })
    }
    function today(){
        $(".today").each(function(){
            id = $(this).attr('id');
            $("#"+id).datepicker("setDate" , new Date()).val();
        })
    }

//Langsung buat Money dengan Class myMoney
    function myMoney()
    {
        $(".myMoney").each(function()
        {
            $(this).attr('onblur','toM(this)')
            $(this).attr('onfocus','toN(this), this.select()')
        })
    }


//Langsung buat TextArea dengan class area
    function txtarea() {
        $(".area").each(function(){
            $(this).attr('onblur','expandblur(this)')
            $(this).attr('onfocus','expand(this)')
            $(this).css("height", " 34px")
        })
    }

// Get Administrator Akun
    function get_admin()
    {
        $.ajax({
            type: "post",
            url: base_url+"user/get_admin",
            dataType: "json",
            success : function(result){
                if(result != null){
                    $("#notaris-span").html(result["nama"]);  
                } 
            }
        }) 
    }

//fungsi textarea expand and blur
    function expand(selector)
    {
            $(selector).addClass("expanding");
            $(selector).animate({
                height: "70px"
            }, 100);
    }

    function expandblur(selector)
    {
        $(selector).animate({
                height: "34px"
            }, 100); 
            $(selector).removeClass("expanding");   
    }

// get Nama Notaris
    function get_notaris(){
        return $.ajax({
            type: "post",
            url: base_url+"user/get_notaris",
            dataType: "json",
            success : function(result){ 
                    $(".notaris").each(function()
                        {
                            $(this).html(result);
                        });  
            }
        }) 
    }

// NotifShow
    function notifShow(jenis, pesan = "") {
    	if (jenis == "error") {

    		    toastr.options = {
    		        closeButton: true,
    		        progressBar: true,
    		        showMethod: 'slideDown',
    		        positionClass: "toast-top-right",
    		        onclick: null,
                    timeOut: 1000000,
    		        showMethod: "fadeIn",
    	  			hideMethod: "fadeOut",
    		    };
    		    toastr["error"](pesan, "Gagal");

        } else if(jenis == "custom") {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    positionClass: "toast-top-right",
                    timeOut: 5000,
                    onclick: null,
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                };
                toastr["success"](pesan, "Pesan");
            }, 1000);
    	}else if(jenis == "info") {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    positionClass: "toast-top-right",
                    timeOut: 5000,
                    onclick: null,
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                };
                toastr["info"](pesan,"INFO");
            }, 1000);
        }  else {
    		setTimeout(function() {
    		    toastr.options = {
    		        closeButton: true,
    		        progressBar: true,
    		        showMethod: 'slideDown',
    		        positionClass: "toast-top-right",
    		        timeOut: 2000,
    		        onclick: null,
    		        showMethod: "fadeIn",
    	  			hideMethod: "fadeOut",
    		    };
    		    if (jenis == 'welcome') {
    		    	toastr["success"](pesan, "Selamat Datang");
    		    }else if (jenis == 'delete') {
    		    	toastr["success"]("Data berhasil dihapus", "Sukses");
    		    }else if (jenis == 'create') {
    		    	toastr["success"]("Data berhasil disimpan", "Sukses");
    		    }else if (jenis == 'update') {
    		    	toastr["success"]("Data berhasil disimpan", "Sukses");
    		    }

    		}, 1000);

    	}
    }

function alertShow(jenis, pesan = "") {
    return "<div class='alert "+ jenis + "'><button class='close' data-close='alert'></button>"+ pesan +"</div>";
}

function loadTable(name_table, keyword, halaman = 1, limit, filter = {}, url_utm, colspan = 7, dofunction="") {
	halaman = (halaman < 1) ? "1" : halaman;
	return $.ajax({
        type: 'POST',
        url: base_url + url_utm,
        data: { action: "show_table", param : {"kywd" : keyword, "page" : halaman, "limit" : limit, "filter" : filter}},
		dataType: "json",
		beforeSend: function() {
			$(name_table).html("<tr><td colspan='" + colspan + "' class='text-center'><img src='" + base_url + "/assets/img/loading.gif' width='35px'></td></tr>");
			$("#section-paging").addClass("hidden");
		},
        success: function (resp) {
			page = resp.paging.HalKe;
			$("#pageNum").val(page);
			$("#btnLastBwh").attr("data-page", resp.paging.JmlHalTotal);
			//$("#infoPage").html(resp.paging.InfoPage + " Data | " + resp.paging.JmlHalTotal + " Halaman");
            $("#infoPage").html((resp.paging.InfoPage == null ? 0 : resp.paging.InfoPage) + " Data | " + (resp.paging.JmlHalTotal == null ? 0 : resp.paging.JmlHalTotal) + " Halaman");
            $(name_table).html(resp.list_result);
            dofunction
			if(resp.paging.IsNext == true) {
				$("#btnNext, #btnNextBwh").attr("data-page", (page + 1));	
				$("#btnNext").removeClass("disabled");
				$("#btnNextBwh").removeClass("disabled");
				$("#btnLastBwh").removeClass("disabled");
			} else {
				$("#btnNext").addClass("disabled");
				$("#btnNextBwh").addClass("disabled");
				$("#btnLastBwh").addClass("disabled");
			}
			
			if(resp.paging.IsPrev == true) {
				$("#btnPrev, #btnPrevBwh").attr("data-page", (page - 1));
				$("#btnPrev").removeClass("disabled");
				$("#btnPrevBwh").removeClass("disabled");
				$("#btnFirstBwh").removeClass("disabled");
			} else {
				$("#btnPrev").addClass("disabled");
				$("#btnPrevBwh").addClass("disabled");
				$("#btnFirstBwh").addClass("disabled");
			}

			$("#section-paging").removeClass("hidden");
        }
    });
}

function loadKota(selector, item_pertama, selected_value = "") {
	$.ajax({
        type: 'POST',
        url: base_url + "/m3/siswa/index",
        data: { action: "get_kota", param : {"item_pertama" : item_pertama, "selected" : selected_value}},
        success: function (resp) {
        	$(selector).append(resp);
        	$(selector).select2();
        }
    });
}

function loadKotaAJAX(selector, item_pertama) {
    $(selector).select2({
        placeholder: item_pertama,
        ajax: {
            type: 'POST',
            url: base_url + "/m3/siswa/index",
            dataType: 'json',
            delay: 250,
            data: function (kunci) {
                kunci = (kunci.term == null) ? "" : kunci.term;
                return {
                    action : "get_kota_ajax",
                    param  : {"kywd" : kunci}
                };
            },
            processResults: function(hasil) {
                var data = $.map(hasil.Data, function (obj) {
                    obj.id   = obj.kota_nama;
                    obj.text = obj.kota_nama;

                    return obj;
                });
                return {
                    results: data
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) { return markup; },
        minimumInputLength: 2,
        templateResult: function(resp) {
            var markup;
            if(typeof resp == "undefined") {
                markup = "Tidak Ada Data";
            } else {
                markup = resp.kota_nama;
            }
            return markup;
        },
        language: {
            noResults: function(terms) {
                return "<a class='select2-addnew' role='button' onclick='addKota(this);' id='newClient'>+Tambah Baru</a>"
            }
        }
    });
}

function loadKota2(keyword, halaman = 1, limit, url_utm, tbody_nama, colspan = 7) {
	halaman = (halaman < 1) ? "1" : halaman;
	$.ajax({
        type: 'POST',
        url: base_url + url_utm,
        data: { action: "get_kota", param : {"kywd" : keyword, "page" : halaman, "limit" : limit}},
		dataType: "json",
		beforeSend: function() {
			$(tbody_nama).html("<tr><td colspan='" + colspan + "' class='text-center'><img src='" + base_url + "/assets/img/loading.gif' width='35px'></td></tr>");
			$("#section-paging").addClass("hidden");
		},
        success: function (resp) {
			page = resp.paging.HalKe;
            $(tbody_nama).html(resp.list_result);
			if(resp.paging.IsNext == true) {
				$("#btnNextKota").attr("data-page", (page + 1));	
				$("#btnNextKota").removeClass("disabled");
			} else {
				$("#btnNextKota").addClass("disabled");
			}
			
			if(resp.paging.IsPrev == true) {
				$("#btnPrevKota").attr("data-page", (page - 1));
				$("#btnPrevKota").removeClass("disabled");
			} else {
				$("#btnPrevKota").addClass("disabled");
			}

			$("#section-paging-kota").removeClass("hidden");
        }
    });
}
 
function change2Select2(selector) {
	selector.select2({
        selectOnClose: true,
		minimumResultsForSearch: Infinity
	});
}

function formatAngka(angka) {
	var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
    var rev2    = '';
    var prc     = 1;
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return rev2.split('').reverse().join('');
}

function formatAngka2(angka, percision) {
	isNegative = false
    if (angka < 0) {
        isNegative = true
    }
    angka = Math.abs(angka)
    if (angka >= 1000000000) {
        formattedNumber = (angka / 1000000000).toFixed(percision).replace(/\.0$/, '') + ' M';
    } else if (angka >= 1000000) {
        formattedNumber =  (angka / 1000000).toFixed(percision).replace(/\.0$/, '') + ' JT';
    } else  if (angka >= 1000) {
        formattedNumber =  (angka / 1000).toFixed(percision).replace(/\.0$/, '') + ' Rb';
    } else {
        formattedNumber = angka;
    }   
    if(isNegative) { formattedNumber = '-' + formattedNumber }
    return formattedNumber;
}

function formatRupiahtoNumber(angka) {
    var angka;
        //angka = angka.replace("Rp. ", "", angka);
        angka = angka.replace(/\./g, "", angka);
    return angka;
}

function getBulanSingkat(e) {
	var bulan = parseInt(e);
	switch(bulan) {
		case 1: return "Jan"; break;
		case 2: return "Feb"; break;
		case 3: return "Mar"; break;
		case 4: return "Apr"; break;
		case 5: return "May"; break;
		case 6: return "June"; break;
		case 7: return "July"; break;
		case 8: return "Aug"; break;
		case 9: return "Sept"; break;
		case 10: return "Oct"; break;
		case 11: return "Nov"; break;
		case 12: return "Dec"; break;
		default : return e; break;
	}
}

function hariini()
{
    var d = new Date();

    var month = d.getMonth()+1;
    var day = d.getDate();

    var output = d.getFullYear() + '/' +
    ((''+month).length<2 ? '0' : '') + month + '/' +
    ((''+day).length<2 ? '0' : '') + day;

    return(output);
}

function formatDate1(date) {
    var d = new Date(date)
  var monthNames = [
    "Jan", "Feb", "Mar",
    "Apr", "May", "Jun", "Jul",
    "Aug", "Sep", "Oct",
    "Nov", "Dec"
  ];

  var day = d.getDate();
  if (day.toString().length == 1) {
      day = "0" + day
  }
  var monthIndex = d.getMonth();
  var year = d.getFullYear();

  return day + '-' + monthNames[monthIndex] + '-' + year;
}

function tglIndo(m_datea) {
    var m_date = m_datea.split('-');
    return m_date[2]+'-'+m_date[1]+'-'+m_date[0];
}

function tglIndo2(m_datea) {
    var m_date = m_datea.split('/');
    return m_date[2]+'-'+m_date[1]+'-'+m_date[0];
}

function manualDate(date)
{
    var output = date.split('-');
    output  = (output.length == 1 ? date.split('/') : output);
    mydata = output[2]+'-'+output[1]+'-'+output[0];
    return mydata;
}

function isNull(date){
    if(date == "1970-01-01"){
        return "";
    }
}

function formatDate(date) {
    if(date != ""){
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');   
    }else{
        return "";
    }
}

//Format tgl
function FormatDateField(e) {
    var t = new Date;
    var n = t.getDate();
    var r = t.getMonth() + 1;
    var i = t.getFullYear();
    if (n.toString().length == 1) {
        n = "0" + n
    }
    if (r.toString().length == 1) {
        r = "0" + r
    }
    var s = e.value;
    s = s.replace(/\//gi, "");
    if (s.length == 2) {
        var o = s.substring(0, 2);
        var u = new Date(i, r - 1, o);
        if (u.getFullYear() == i && u.getMonth() + 1 == r && u.getDate() == o) {
            s = s.substring(0, 2) + "-" + getBulanSingkat(r) + "-" + i;
            e.value = s
        } else {
            s = u.getDate() + "-" + getBulanSingkat(r) + "-" + i;
            e.value = s
        }
    } else if (s.length == 4) {
        var o = s.substring(0, 2);
        var a = s.substring(2, 4);
        var u = new Date(i, a - 1, o);
        if (u.getFullYear() == i && u.getMonth() + 1 == a && u.getDate() == o) {
            s = s.substring(0, 2) + "-" + getBulanSingkat(s.substring(2, 4)) + "-" + i;
            e.value = s
        } else {
            s = n + "-" + getBulanSingkat(r) + "-" + i;
            e.value = s
        }
    } else if (s.length == 6) {
        var o = s.substring(0, 2);
        var a = s.substring(2, 4);
        var f = "20" + s.substring(4, 6);
        var u = new Date(f, a - 1, o);
        if (u.getFullYear() == f && u.getMonth() + 1 == a && u.getDate() == o) {
            s = s.substring(0, 2) + "-" + getBulanSingkat(s.substring(2, 4)) + "-" + "20" + s.substring(4, 6);
            e.value = s
        } else {
            s = n + "-" + getBulanSingkat(r) + "-" + i;
            e.value = s
        }
	} else if (s.length == 8) {
		var o = s.substring(0, 2);
        var a = s.substring(2, 4);
		var f = s.substring(4, 8)
		var u = new Date(f, a - 1, o);
		if (u.getFullYear() == f && u.getMonth() + 1 == a && u.getDate() == o) {
            s = s.substring(0, 2) + "-" + getBulanSingkat(s.substring(2, 4)) + "-" + s.substring(4, 8);
            e.value = s
        } else {
            s = n + "-" + getBulanSingkat(r) + "-" + i;
            e.value = s
        }
    } 
}

function onlyNumber(e) {
                    // Allow: backspace, delete, tab, escape, enter and .
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                         // Allow: Ctrl/cmd+A
                        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                         // Allow: Ctrl/cmd+C
                        (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                         // Allow: Ctrl/cmd+X
                        (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                         // Allow: home, end, left, right
                        (e.keyCode >= 35 && e.keyCode <= 39)) {
                             // let it happen, don't do anything
                             return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
        
        }

//fungsi modal agar berisi dan bisa pagination
            function get_modal_data(m_kywd, m_hal , m_utama, m_table)
            {
                m_hal = (m_hal < 1) ? "1" : m_hal; 
                console.log("hal: "+m_hal+" kywd: "+m_kywd);
                   $.ajax({
                        type: "POST",
                        url: base_url+m_utama,
                        data: {param : {"page":m_hal, "kywd":m_kywd}},
                        dataType: "json",
                        success: function (result) {

                            page = result.paging.HalKe;

                            if(result.paging.IsNext == true) {
                                $(".btnNext").attr("data-page", (page + 1));  
                                $(".btnNext").removeClass("disabled");
                            }else{
                                $(".btnNext").addClass("disabled");
                            }

                            if(result.paging.IsPrev == true) {
                                $(".btnPrev").attr("data-page", (page - 1));
                                $(".btnPrev").removeClass("disabled");
                            } else {
                                $(".btnPrev").addClass("disabled");
                            }


                        $(m_table).html(result["list_result"]);
                        }
                   });
            }
            
            function nextPageM(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }

            function prevPageM(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }
        
        
        //set data ke form
            function set_klien(selector)
            {
                nama = $(selector).attr("data-klien");
                id = $(selector).attr("data-id");
                $("#nama_klien").val(nama);
                $(".nama_klien").val(nama);
                $("#id_klien").val(id);
                $(".id_klien").val(id);
                $('#m_klien').modal('hide');
            }

            function set_layanan(selector)
            {
                nama = $(selector).attr("data-layanan");
                id = $(selector).attr("data-id");
                $("#nama_layanan").val(nama);
                $(".nama_layanan").val(nama);
                $("#id_layanan").val(id);
                $(".id_layanan").val(id);
                $('#m_layanan').modal('hide');
            }

            function set_officer(selector)
            {
                nama = $(selector).attr("data-officer");
                id = $(selector).attr("data-id");
                $("#nama_officer").val(nama);
                $(".nama_officer").val(nama);
                $("#id_officer").val(id);
                $(".id_officer").val(id);
                $('#m_officer').modal('hide');
            }

            function set_order(selector)
            {
                nama = $(selector).attr("data-order");
                id = $(selector).attr("data-id");
                $("#nama_order").val(nama);
                $(".nama_order").val(nama);
                $("#id_order").val(id);
                $(".id_order").val(id);
                $('#m_order').modal('hide');
            }

            
            function set_kontak(selector)
            {
                nama = $(selector).attr("data-kontak");
                id = $(selector).attr("data-id");
                $("#nama_kontak").val(nama);
                $(".nama_kontak").val(nama);
                $("#id_kontak").val(id);
                $(".id_kontak").val(id);
                $('#m_kontak').modal('hide');
            }

            function set_transaksi(selector)
            {
                nama = $(selector).attr("data-transaksi");
                id = $(selector).attr("data-id");
                $("#nama_transaksi").val(nama);
                $(".nama_transaksi").val(nama);
                $("#id_transaksi").val(id);
                $(".id_transaksi").val(id);
                $('#m_transaksi').modal('hide');
            }

            function set_ssp(selector)
            {
                nama = $(selector).attr("data-ssp");
                id = $(selector).attr("data-id");
                $("#nama_ssp").val(nama);
                $(".nama_ssp").val(nama);
                $("#id_ssp").val(id);
                $(".id_ssp").val(id);
                $('#m_ssp').modal('hide');
            }

            function set_ssb(selector)
            {
                nama = $(selector).attr("data-ssb");
                id = $(selector).attr("data-id");
                $("#nama_ssb").val(nama);
                $(".nama_ssb").val(nama);
                $("#id_ssb").val(id);
                $(".id_ssb").val(id);
                $('#m_ssb').modal('hide');
            }

            function set_KonfirmasiBayar(selector)
            {
                nama = $(selector).attr("data-KonfirmasiBayar");
                id = $(selector).attr("data-id");
                $("#nama_KonfirmasiBayar").val(nama);
                $(".nama_KonfirmasiBayar").val(nama);
                $("#id_KonfirmasiBayar").val(id);
                $(".id_KonfirmasiBayar").val(id);
                $('#m_KonfirmasiBayar').modal('hide');
            }

            function set_NotarisRekanan(selector)
            {
                nama = $(selector).attr("data-NotarisRekanan");
                id = $(selector).attr("data-id");
                $("#nama_NotarisRekanan").val(nama);
                $(".nama_NotarisRekanan").val(nama);
                $("#id_NotarisRekanan").val(id);
                $(".id_NotarisRekanan").val(id);
                $('#m_NotarisRekanan').modal('hide');
            }
            
        
        
        //fungsi menekan search modal
            function ref_klien()
            {
                get_modal_data("", "" , "umum/data_klien", "#list-klien");
            }
            function ref_layanan()
            {
                get_modal_data("", "", "umum/data_layanan", "#list-layanan");
            }
            function ref_officer()
            {
                get_modal_data("", "", "umum/data_officer", "#list-officer");
            }
            function ref_kontak()
            {
                get_modal_data("", "", "umum/data_kontak", "#list-kontak");
            }
            function ref_order()
            {
                get_modal_data("", "", "umum/data_order", "#list-order");
            }
            function ref_transaksi()
            {
                get_modal_data("", "", "umum/data_transaksi", "#list-transaksi");
            }

            function ref_ssp()
            {
                get_modal_data("", "", "umum/data_ssp", "#list-ssp");
            }

            function ref_ssb()
            {
                get_modal_data("", "", "umum/data_ssb", "#list-ssb");
            }

            function ref_KonfirmasiBayar()
            {
                get_modal_data("", "", "umum/data_KonfirmasiBayar", "#list-KonfirmasiBayar");
            }
            function ref_NotarisRekanan()
            {
                get_modal_data("", "", "umum/data_NotarisRekanan", "#list-NotarisRekanan");
            }
        
        
        //search
            $("#form-search-klien").submit(function(){
                search_data = $("#s-klien").val();
                get_modal_data(search_data, "" , "umum/data_klien", "#list-klien");   
                return false;
            })

            $("#form-search-layanan").submit(function(){
                search_data = $("#s-layanan").val();
                get_modal_data(search_data, "", "umum/data_layanan", "#list-layanan"); 
                return false;
            })

            $("#form-search-officer").submit(function(){
                search_data = $("#s-officer").val();
                get_modal_data(search_data, "", "umum/data_officer", "#list-officer");
                return false;
            })

            $("#form-search-kontak").submit(function(){
                search_data = $("#s-kontak").val();
                get_modal_data(search_data, "", "umum/data_kontak", "#list-kontak");
                return false;
            })

            $("#form-search-order").submit(function(){
                search_data = $("#s-order").val();
                get_modal_data(search_data, "1", "umum/data_order", "#list-order");
                return false;
            })

            $("#form-search-transaksi").submit(function(){
                search_data = $("#s-transaksi").val();
                get_modal_data(search_data, "", "umum/data_transaksi", "#list-transaksi");
                return false;
            })

            $("#form-search-ssp").submit(function(){
                search_data = $("#s-ssp").val();
                get_modal_data(search_data, "", "umum/data_ssp", "#list-ssp");
                return false;
            })

            $("#form-search-ssb").submit(function(){
                search_data = $("#s-ssb").val();
                get_modal_data(search_data, "", "umum/data_ssb", "#list-ssb");
                return false;
            })

            $("#form-search-KonfirmasiBayar").submit(function(){
                search_data = $("#s-KonfirmasiBayar").val();
                get_modal_data(search_data, "", "umum/data_KonfirmasiBayar", "#list-KonfirmasiBayar");
                return false;
            })
            
            $("#form-search-NotarisRekanan").submit(function(){
                search_data = $("#s-NotarisRekanan").val();
                get_modal_data(search_data, "", "umum/data_NotarisRekanan", "#list-NotarisRekanan");
                return false;
            })

         //tooltip
             function ourToolTIP(){
                $( function()
                {
                    var targets = $( '[rel~=tooltip]' ),
                        target  = false,
                        tooltip = false,
                        title   = false;
                 
                    targets.bind( 'mouseenter', function()
                    {
                        target  = $( this );
                        tip     = target.attr( 'title' );
                        tooltip = $( '<div id="tooltip"></div>' );
                 
                        if( !tip || tip == '' )
                            return false;
                 
                       // target.removeAttr( 'title' );
                        tooltip.css( 'opacity', 0 )
                               .html( tip )
                               .appendTo( 'body' );
                 
                        var init_tooltip = function()
                        {
                            if( $( window ).width() < tooltip.outerWidth() * 1.5 )
                                tooltip.css( 'max-width', $( window ).width() / 2 );
                            else
                                tooltip.css( 'max-width', 340 );
                 
                            var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
                                pos_top  = target.offset().top - tooltip.outerHeight() - 20;
                 
                            if( pos_left < 0 )
                            {
                                pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                                tooltip.addClass( 'left' );
                            }
                            else
                                tooltip.removeClass( 'left' );
                 
                            if( pos_left + tooltip.outerWidth() > $( window ).width() )
                            {
                                pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                                tooltip.addClass( 'right' );
                            }
                            else
                                tooltip.removeClass( 'right' );
                 
                            if( pos_top < 0 )
                            {
                                var pos_top  = target.offset().top + target.outerHeight();
                                tooltip.addClass( 'top' );
                            }
                            else
                                tooltip.removeClass( 'top' );
                 
                            tooltip.css( { left: pos_left, top: pos_top } )
                                   .animate( { top: '+=10', opacity: 1 }, 50 );
                        };
                 
                        init_tooltip();
                        $( window ).resize( init_tooltip );
                 
                        var remove_tooltip = function()
                        {
                            tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
                            {
                                $( this ).remove();
                            });
                 
                            target.attr( 'title', tip );
                        };
                 
                        target.bind( 'mouseleave', remove_tooltip );
                        tooltip.bind( 'click', remove_tooltip );
                    });
                });
             }


         //Confert Uang
                function toM(selector)
                {
                    hargasatuan = $(selector).val();
                    
                        var number_string = hargasatuan.toString(), sisa  = number_string.length % 3, hargasatuan  = number_string.substr(0, sisa), ribuan  = number_string.substr(sisa).match(/\d{3}/g); if (ribuan) { separator = sisa ? '.' : ''; hargasatuan += separator + ribuan.join('.');}
                    $(selector).val(hargasatuan);
                }

                function toN(selector)
                {
                    nominal = $(selector).val();
                    jumlah = nominal.replace (/\./g, "", nominal);
                    $(selector).val(jumlah);
                }
                function returntoN(nominal)
                {
                    jumlah = nominal.replace(/\./g, "", nominal);
                    return jumlah;
                }

                function returntoM(hargasatuan)
                {
                    
                        var number_string = hargasatuan.toString(), sisa  = number_string.length % 3, hargasatuan  = number_string.substr(0, sisa), ribuan  = number_string.substr(sisa).match(/\d{3}/g); if (ribuan) { separator = sisa ? '.' : ''; hargasatuan += separator + ribuan.join('.');}
                    return hargasatuan;
                }

                function returndgkota(id)
                {
                    if (id != null){
                        var stringy = id.toString();
                        return stringy[0]+stringy[1]+'.'+stringy[2]+stringy[3]
                    }
                }

                function returndg(id)
                {
                    if (id != null){
                        var stringy = id.toString();
                        return stringy.split('.').join("")
                    }
                }
        // Simpan File
       
        
//tambahan
        //fungsi terbilang
        function terbilang(bilangan){
            //var bilangan=document.getElementById("nominal").value;
            bilangan    = String(bilangan);
            var kalimat="";
            var angka   = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
            var kata    = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
            var tingkat = new Array('','Ribu','Juta','Milyar','Triliun');
            var panjang_bilangan = bilangan.length;
             
            /* pengujian panjang bilangan */
            if(panjang_bilangan > 15){
                kalimat = "Diluar Batas";
            }else{
                /* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
                for(i = 1; i <= panjang_bilangan; i++) {
                    angka[i] = bilangan.substr(-(i),1);
                }
                 
                var i = 1;
                var j = 0;
                 
                /* mulai proses iterasi terhadap array angka */
                while(i <= panjang_bilangan){
                    subkalimat = "";
                    kata1 = "";
                    kata2 = "";
                    kata3 = "";
                     
                    /* untuk Ratusan */
                    if(angka[i+2] != "0"){
                        if(angka[i+2] == "1"){
                            kata1 = "Seratus";
                        }else{
                            kata1 = kata[angka[i+2]] + " Ratus";
                        }
                    }
                     
                    /* untuk Puluhan atau Belasan */
                    if(angka[i+1] != "0"){
                        if(angka[i+1] == "1"){
                            if(angka[i] == "0"){
                                kata2 = "Sepuluh";
                            }else if(angka[i] == "1"){
                                kata2 = "Sebelas";
                            }else{
                                kata2 = kata[angka[i]] + " Belas";
                            }
                        }else{
                            kata2 = kata[angka[i+1]] + " Puluh";
                        }
                    }
                     
                    /* untuk Satuan */
                    if (angka[i] != "0"){
                        if (angka[i+1] != "1"){
                            kata3 = kata[angka[i]];
                        }
                    }
                     
                    /* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
                    if ((angka[i] != "0") || (angka[i+1] != "0") || (angka[i+2] != "0")){
                        subkalimat = kata1+" "+kata2+" "+kata3+" "+tingkat[j]+" ";
                    }
                     
                    /* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
                    kalimat = subkalimat + kalimat;
                    i = i + 3;
                    j = j + 1;
                }
                 
                /* mengganti Satu Ribu jadi Seribu jika diperlukan */
                if ((angka[5] == "0") && (angka[6] == "0")){
                    kalimat = kalimat.replace("Satu Ribu","Seribu");
                }
            }
            //document.getElementById("terbilang").innerHTML=kalimat;
            return kalimat;
        }
       
    //get nama tanggal
    function getnamahari(hari){
        var nhari = hari.getDay();
        var nama = new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");  
        return nama[nhari];                      
    }

    function getnamabulan(bulan){
        var nbulan = bulan.getMonth();
        var nama = new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        return nama[nbulan];  
    }


    function namajam(jam,menit){
        var jadi,menitan;
        jadi = terbilang(jam); 
        if(menit == "00"){
            menitan = "nol nol";
        }else{
            menitan = "lebih"+terbilang(menit)+"menit";
        }
        return jadi+menitan;
    }

            function convertDate(inputFormat) {
              function pad(s) { return (s < 10) ? '0' + s : s; }
              var d = new Date(inputFormat);
              return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/');
            }
