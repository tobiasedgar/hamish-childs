!function(){function t(e){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(e)}var e={data:function(){return{loading:!1,palette:[]}},props:{options:[Object,Array],display:String,size:String,unselect:Boolean,default:[String,Boolean],extractor:Boolean,limit:Number,uri:String,endpoints:Object,autotemplate:String,template:String,label:String,disabled:Boolean,help:String,parent:String,value:[String,Array],name:[String,Number],required:Boolean,type:String},computed:{selected:function(){return Array.isArray(this.value)?this.value[0]:this.value},extracted:function(){var t=Array.isArray(this.value)?this.value[1]:"";return this.palette.length?this.palette:t},emptyOptions:function(){return!(this.isObject(this.options)?Object.keys(this.options).length:this.options.length)&&!this.extractor},emptyOptionsPlaceholder:function(){return this.autotemplate?this.$t("palette.empty.template"):this.$t("palette.empty.options")},emptyPalette:function(){return this.extractor&&!this.extracted.length&&!this.loading},loadingPalette:function(){return this.extractor&&this.loading},colors:function(){return this.extractor?!!this.extracted.length&&this.extracted:this.isQueryOptions(this.options)?this.options.map((function(t){return t.value})):this.options}},created:function(){var t=this;!this.value&&this.default&&(Array.isArray(this.colors)&&this.colors.find((function(e){return e==t.default}))?(this.value=this.default,this.input()):this.isObject(this.colors)&&Object.keys(this.colors).find((function(e){return e==t.default}))&&(this.value=this.colors[this.default],this.input()))},methods:{isValue:function(t){return this.isObject(t)?this.selected==t||!!this.isObject(this.selected)&&this.isEquivalent(this.selected,t):this.selected==t},inlineStyle:function(t){return"duo"==this.display&&this.isObject(t)?"background: linear-gradient(to right, "+this.firstColor(t)+" 50%, "+this.secondColor(t)+" 50%);":"background:"+this.firstColor(t)},toTooltip:function(t){return!(!this.isObject(t)||!t.tooltip)&&t.tooltip},firstColor:function(t){return this.isString(t)?t:this.isObject(t)?t[Object.keys(t)[0]]:void 0},secondColor:function(t){return!!this.isObject(t)&&t[Object.keys(t)[1]]},isString:function(t){return"string"==typeof t},isObject:function(e){return null!=e&&"object"===t(e)},isQueryOptions:function(t){if(!t.length)return!1;var e=t[0];return this.isObject(e)&&2==Object.keys(e).length&&Object.keys(e).includes("text")&&Object.keys(e).includes("value")},isEquivalent:function(t,e){var i=Object.keys(t),n=Object.keys(e),o=i.indexOf("key");-1!==o&&i.splice(o,1);var s=n.indexOf("key");if(-1!==s&&n.splice(s,1),i.length!=n.length)return!1;for(var l=0;l<i.length;l++){var r=i[l];if(t[r]!==e[r])return!1}return!0},openSelector:function(){var t=this;this.$api.get("color-palette/get-files",{uri:this.uri,template:this.template}).then((function(e){t.$refs.selector.open(e,{max:!1,multiple:!1})})).catch((function(){t.$store.dispatch("notification/error","The files query does not seem to be correct")}))},processImage:function(t){var e=this;this.loading=!0,this.$api.get("color-palette/extract-image-colors",{filename:t[0].filename,uri:this.uri,limit:this.limit}).then((function(t){e.palette=t.colors,e.value=["",e.palette],e.input(),e.loading=!1})).catch((function(t){e.palette=[],e.loading=!1}))},input:function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0],e=arguments.length>1?arguments[1]:void 0;t&&(this.unselect&&this.isValue(t)&&(t=""),this.value=this.extractor?[t,this.extracted]:t,this.isObject(this.value)&&(this.value.key=e)),this.$emit("input",this.value)}}};"function"==typeof e&&(e=e.options),Object.assign(e,{render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("k-field",t._b({staticClass:"k-color-palette-field"},"k-field",t.$props,!1),[i("template",{slot:"options"},[t.extractor?i("k-button",{ref:"extract",attrs:{id:t._uid,icon:"palette-pipette"},on:{click:t.openSelector}},[t._v(" "+t._s(t.$t("palette.new.palette"))+" ")]):t._e(),t._v(" "),i("k-files-dialog",{ref:"selector",on:{submit:t.processImage}})],1),t._v(" "),t.emptyOptions?i("k-box",{staticClass:"color-palette_empty-options",attrs:{theme:"info"}},[t._v(" "+t._s(t.emptyOptionsPlaceholder)+" ")]):t.emptyPalette?i("k-empty",{class:["color-palette_empty-palette",t.size],attrs:{layout:"custom",icon:"image"},on:{click:t.openSelector}},[t._v(" "+t._s(t.$t("palette.empty.palette"))+" ")]):t.loadingPalette?i("div",{staticClass:"color-palette_empty-loading"},[i("div",{staticClass:"loader-ctn",class:t.size},[i("div",{staticClass:"loader"})])]):i("div",{staticClass:"color-palette_input"},[i("ul",{staticClass:"color-palette_input-list"},t._l(t.colors,(function(e,n){return i("li",{class:[t.size,{active:t.isValue(e)},{unselect:t.unselect}],on:{click:function(i){return t.input(e,n)}}},[i("div",{staticClass:"color-palette_input-color",style:t.inlineStyle(e),attrs:{"data-tooltip":t.toTooltip(e)}})])})),0)])],2)},staticRenderFns:[],_compiled:!0,_scopeId:null,functional:void 0}),document.querySelector("svg defs").innerHTML+='\n    <symbol id="icon-palette-pipette" viewbox="0 0 36 35.99">\n        <path d="M35.41,5.25,30.74.58a2,2,0,0,0-2.83,0L21.66,6.83,17.83,3,15,5.82l2.84,2.84L0,26.49V36H9.5L27.34,18.15,30.17,21,33,18.16l-3.84-3.84,6.25-6.25A2,2,0,0,0,35.41,5.25ZM7.84,32,4,28.15,20.13,12,24,15.87Z"/>\n    </symbol>\n',panel.plugin("sylvainjule/color-palette",{fields:{"color-palette":e}})}();