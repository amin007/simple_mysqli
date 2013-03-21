/* http://keith-wood.name/datepick.html
   Malaysian localisation for jQuery Datepicker.
   Written by Mohd Nawawi Mohamad Jamili (nawawi@ronggeng.net). */
(function($) {
	$.datepick.regional['ms'] = {
		monthNames: ['01-Jan','02-Feb','03-Mac','04-Apr','05-Mei','06-Jun',
		'07-Jul','08-Ogo','09-Sep','10-Okt','11-Nov','12-Dis'],
		monthNamesLong: ['01-Januari','02-Februari','03-Mac','04-April','05-Mei','06-Jun',
		'07-Julai','08-Ogos','09-September','10-Oktober','11-November','12-Disember'],
		dayNames: ['Ahad','Isnin','Selasa','Rabu','Khamis','Jumaat','Sabtu'],
		dayNamesShort: ['Aha','Isn','Sel','Rab','Kha','Jum','Sab'],
		dayNamesMin: ['Ah','Is','Se','Ra','Kh','Ju','Sa'],
		dateFormat: 'dd/mm/yyyy', firstDay: 0,
		renderer: $.datepick.defaultRenderer,
		prevText: '&#x3c;Sebelum', prevStatus: 'Tunjukkan bulan lepas',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: 'Tunjukkan tahun lepas',
		nextText: 'Selepas&#x3e;', nextStatus: 'Tunjukkan bulan depan',
		nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: 'Tunjukkan tahun depan',
		currentText: 'hari ini', currentStatus: 'Tunjukkan bulan terkini',
		todayText: 'hari ini', todayStatus: 'Tunjukkan bulan terkini',
		clearText: 'Padam', clearStatus: 'Padamkan tarikh terkini',
		closeText: 'Tutup', closeStatus: 'Tutup tanpa perubahan',
		yearStatus: 'Tunjukkan tahun yang lain', monthStatus: 'Tunjukkan bulan yang lain',
		weekText: 'Mg', weekStatus: 'Minggu bagi tahun ini',
		dayStatus: 'DD, d MM', defaultStatus: 'Sila pilih tarikh',
		isRTL: false
	};
	$.datepick.setDefaults($.datepick.regional['ms']);
})(jQuery);
