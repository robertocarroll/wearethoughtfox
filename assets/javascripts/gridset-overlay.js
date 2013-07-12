// Gridset Overlay JS

gs = {

	init: function () {
		
		if (window.location.href.match('gridset=show')) gs.show();
	
		gs.bind(document, 'keydown', function (e) { 
		
			if (!e) var e = window.event;
		
			if(e.metaKey || e.ctrlKey) {
				
				switch (e.which || e.keyCode) {
					case 71:
					
						var gw = document.querySelectorAll('.gridsetoverlaywrap, #gridsetoverlaystyles, #gridscreenwidthwrap');
					
						if (gw.length == 0) gs.show();
						else { window.location.href = window.location.href.replace('?gridset=show', '') }
						
						gs.prevent(e);
						break;
						
				}
				
			}
		
		
		});
	
	},
	
	width: function () {
		
		var swv = document.getElementById('gridscreenwidthval');
		if (swv) swv.innerHTML = window.innerWidth + 'px';
		
	},

	show: function () {
	
		var b = document.getElementsByTagName('body')[0],
				gridareas = document.querySelectorAll('[class*=-showgrid]'),
				areacount = gridareas.length,
				wrapper = document.querySelectorAll('.wrapper'),
			
				styles = '.gridsetoverlaywrap{padding:0 !important;display:block;position:absolute;top:0;left:0;width:100%;height:100%;z-index:10000;pointer-events:none;}.gridsetnoareas .gridsetoverlaywrap{position:fixed;}.gridwrap{padding:0 !important;display:block;position:absolute;top:0;left:0;width:100%;height:100%;font-family:Helvetica, Arial, sans-serif !important;}.gridoverlay{padding:0 !important;position:relative;height:100%;overflow:hidden !important;background:none !important;}.gridoverlay .gridset{padding:0 !important;position:absolute;width:100%;height:100%;top:0;left:0;opacity:0.8; display:block;}.gridoverlay .gridset div{padding:0;text-align:left;font-size:10px !important;border:1px solid #FFD800 !important;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;height:100%;}.gridoverlay .gridset > div{border:none !important;height:100%;position:absolute;top:0;left:0;width:100%;}.gridoverlay div small{width:100%;display:block;text-align:center;font-weight:400 !important;letter-spacing: 1px !important;padding-top:0 !important;text-transform:none !important;height:22px !important;line-height:22px !important;text-style:normal !important;border-bottom:1px solid #FFD800 !important;color:#333 !important;background-color:#FFF79F !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(2){padding-top:23px !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(2) small{border-bottom:1px dashed #FFD800 !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(2) > div{border:1px dashed #FFD800 !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(3){padding-top:45px !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(3) small{border-bottom:1px dotted #FFD800 !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(3) > div{border:1px dotted #FFD800 !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(4){padding-top:67px !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(4) small{border-bottom:1px double #FFD800 !important;}.gridsetnoareas .gridoverlay .gridset > div:nth-child(4) > div{border:1px double #FFD800 !important;}.gridsetoverlaywrap .noshow{display:none;}#gridscreenwidthwrap{margin:0 !important;padding:0 !important;display:none;width:100%;position:fixed !important;z-index:10000 !important;bottom:0 !important;left:0 !important;height:30px !important;opacity:0.95;border-top:1px solid #FFD800 !important;color:#333;background-color:#FFF79F !important;font-family:Helvetica, Arial, sans-serif !important;}#gridscreenwidth{margin:0 !important;display:block;width:100%;text-align:center;font-size:12px;line-height:1;padding-top:8px !important;}#gridscreenwidth strong{text-transform:none;}',
				
				newstyles = document.createElement('style'),
				newwidth = document.createElement('div'),
				head = document.getElementsByTagName('head'),
				newfavicon = document.createElement('link'),
				newgsstyles = document.createElement('link');
		
		newstyles.id = 'gridsetoverlaystyles';
		newstyles.innerHTML = styles;
		newstyles.type = 'text/css';
		
		newwidth.id = 'gridscreenwidthwrap';
		newwidth.innerHTML = '<p id="gridscreenwidth">Screen width: <strong id="gridscreenwidthval"></strong></p>';
		
		b.appendChild(newstyles);
		b.appendChild(newwidth);
		
		var newwidthdisplay = (newwidth.currentStyle) ? newwidth.currentStyle.display : getComputedStyle(newwidth, null).display;
		
		newfavicon.rel = "shortcut icon";
		newfavicon.id = "gridsetfavicon";
		newfavicon.href = "http://dev.gridsetapp.com/app/img/favicon.ico";
		
		head[0].appendChild(newfavicon);
		
		if (newwidthdisplay != 'block') {
		
			newgsstyles.rel = "stylesheet";
			newgsstyles.id = "gridsetstyles";
			newgsstyles.href = "https://get.gridsetapp.com/18676/";
			head[0].appendChild(newgsstyles);
		
		}
		
		if (areacount) {
			
			var j = areacount;
			
			while (j-- > 0) {
			
				var area = gridareas[j];
			
				gs.buildgrid(area, j, areacount);
				
				if (window.getComputedStyle(area,null).getPropertyValue("position") == 'static') area.style.position = 'relative';
				
			}
			
		}
		else {
			
			if (!b.className.match('gridsetnoareas')) b.className += ' gridsetnoareas';
			
			gs.buildgrid(b, j, areacount);
		
		}
		
		gs.width();
		gs.bind(window, 'resize', gs.width);
	
	},
	
	buildgrid: function (area, j, showgrid) {
		
		var set = JSON.parse('{"id":"18676","name":"WATF site Clint","widths":{"1024":{"width":1024,"grids":{"wd":{"name":"WATF desktop","prefix":"wd","width":1024,"columns":{"wd1":{"name":"wd1","unit":"%","percent":7.06426571,"px":72.34},"wd2":{"name":"wd2","unit":"%","percent":7.07130884,"px":72.41},"wd3":{"name":"wd3","unit":"%","percent":7.07317842,"px":72.43},"wd4":{"name":"wd4","unit":"%","percent":7.07447677,"px":72.44},"wd5":{"name":"wd5","unit":"%","percent":7.07736749,"px":72.47},"wd6":{"name":"wd6","unit":"%","percent":7.07671472,"px":72.47},"wd7":{"name":"wd7","unit":"%","percent":7.07614682,"px":72.46},"wd8":{"name":"wd8","unit":"%","percent":7.08250769,"px":72.52},"wd9":{"name":"wd9","unit":"%","percent":7.0791046,"px":72.49},"wd10":{"name":"wd10","unit":"%","percent":7.07593943,"px":72.46},"wd11":{"name":"wd11","unit":"%","percent":7.08068653,"px":72.51},"wd12":{"name":"wd12","unit":"%","percent":7.08041236,"px":72.5}},"gutter":{"unit":"px","px":14,"percent":1.3671875},"ratio":{"name":"even","value":1}}}},"768":{"width":768,"grids":{"wt":{"name":"WATF tablet","prefix":"wt","width":768,"columns":{"wt1":{"name":"wt1","unit":"%","percent":6.6448759,"px":51.03},"wt2":{"name":"wt2","unit":"%","percent":6.65173335,"px":51.09},"wt3":{"name":"wt3","unit":"%","percent":6.65706392,"px":51.13},"wt4":{"name":"wt4","unit":"%","percent":6.66077388,"px":51.15},"wt5":{"name":"wt5","unit":"%","percent":6.65818469,"px":51.13},"wt6":{"name":"wt6","unit":"%","percent":6.65602208,"px":51.12},"wt7":{"name":"wt7","unit":"%","percent":6.65668848,"px":51.12},"wt8":{"name":"wt8","unit":"%","percent":6.65728664,"px":51.13},"wt9":{"name":"wt9","unit":"%","percent":6.65783533,"px":51.13},"wt10":{"name":"wt10","unit":"%","percent":6.66017516,"px":51.15},"wt11":{"name":"wt11","unit":"%","percent":6.662389,"px":51.17},"wt12":{"name":"wt12","unit":"%","percent":6.65978406,"px":51.15}},"gutter":{"unit":"px","px":14,"percent":1.82291667},"ratio":{"name":"even","value":1}}}},"320":{"width":320,"grids":{"wm":{"name":"WATF mobile","prefix":"wm","width":320,"columns":{"wm1":{"name":"wm1","unit":"%","percent":12.94428893,"px":41.42},"wm2":{"name":"wm2","unit":"%","percent":12.98758087,"px":41.56},"wm3":{"name":"wm3","unit":"%","percent":12.97752197,"px":41.53},"wm4":{"name":"wm4","unit":"%","percent":13.00313864,"px":41.61},"wm5":{"name":"wm5","unit":"%","percent":13.01201807,"px":41.64},"wm6":{"name":"wm6","unit":"%","percent":13.04420152,"px":41.74}},"gutter":{"unit":"px","px":14,"percent":4.375},"ratio":{"name":"even","value":1}}}}},"prefixes":{"index":["wd","wt","wm"],"1024":["wd"],"768":["wt"],"320":["wm"]}}'),
		
				gridwrap = document.createElement('div'),
				gridinner = (showgrid) ? '<div class="gridwrap"><div class="gridoverlay">' : '<div class="gridwrap"><div class="gridoverlay wrapper">';
		
		if (showgrid) gridwrap.className = 'gridsetoverlaywrap';
		else gridwrap.className = 'gridsetoverlaywrap';	
		
		for (w in set.widths) {
			
			var width = set.widths[w],
					hides = '';
			
			for (p in set.prefixes) {
				
				if (p != w && p != 'index') hides += set.prefixes[p][0] + "-hide ";
				
			}
			
			gridinner += '<div class="gridset ' + hides + '">';
			
			for (j in width.grids) {
			
				var grid = width.grids[j];
				
				if (!showgrid || area.className.match(grid.prefix + '-showgrid')) {
				
					gridinner += '<div>';
					
					for (k in grid.columns) {
						
						var col = grid.columns[k];
						
						gridinner += '<div class="' + col.name + '"><small>' + col.name + '</small></div>';
					
					}
					
					gridinner += '</div>';
				
				}
			}
			
			gridinner += '</div>';
		
		}
		
		gridinner += '</div></div>';
		
		gridwrap.innerHTML = gridinner;
		
		area.appendChild(gridwrap);
		
	},
	
	bind : function (t, e, f) {
		
		if (t.attachEvent) t.attachEvent('on' + e, f);
		else t.addEventListener(e, f, false);
	
	},
	
	prevent : function (e) {
	
		if (e.preventDefault) e.preventDefault();
		else event.returnValue = false;
	
	}


};

gs.init();