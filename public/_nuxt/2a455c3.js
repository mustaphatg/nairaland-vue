(window.webpackJsonp=window.webpackJsonp||[]).push([[11],{207:function(e,t,n){var content=n(210);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[e.i,content,""]]),content.locals&&(e.exports=content.locals);(0,n(42).default)("63704ff2",content,!0,{sourceMap:!1})},208:function(e,t,n){"use strict";var r={name:"ClipLoader",props:{loading:{type:Boolean,default:!0},color:{type:String,default:"#5dc596"},size:{type:String,default:"35px"},radius:{type:String,default:"100%"}},computed:{spinnerStyle:function(){return{height:this.size,width:this.size,borderWidth:"2px",borderStyle:"solid",borderColor:this.color+" "+this.color+" transparent",borderRadius:this.radius,background:"transparent"}}}},o=(n(209),n(2)),component=Object(o.a)(r,(function(){var e=this,t=e._self._c;return t("div",{directives:[{name:"show",rawName:"v-show",value:e.loading,expression:"loading"}],staticClass:"v-spinner"},[t("div",{staticClass:"v-clip",style:e.spinnerStyle})])}),[],!1,null,null,null);t.a=component.exports},209:function(e,t,n){"use strict";n(207)},210:function(e,t,n){var r=n(41)((function(i){return i[1]}));r.push([e.i,".v-spinner{text-align:center}.v-spinner .v-clip{animation:v-clipDelay .75s linear 0s infinite;animation-fill-mode:both;display:inline-block}@keyframes v-clipDelay{0%{transform:rotate(0deg) scale(1)}50%{transform:rotate(180deg) scale(.8)}to{transform:rotate(1turn) scale(1)}}",""]),r.locals={},e.exports=r},229:function(e,t,n){"use strict";n.r(t);var r=n(5),o=(n(43),{components:{ClipLoader:n(208).a},layout:"home_page",data:function(){return{topics:[],loading:!0,size:"50px"}},fetch:function(){var e=this;return Object(r.a)(regeneratorRuntime.mark((function t(){var dd;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e.$axios.get("/api/home");case 2:return dd=t.sent,t.next=5,dd.data;case 5:e.topics=t.sent;case 6:case"end":return t.stop()}}),t)})))()}}),l=n(2),component=Object(l.a)(o,(function(){var e=this,t=e._self._c;return t("div",[e.$fetchState.pending?t("p",{staticClass:"mt-5"},[t("clip-loader",{attrs:{loading:e.loading,color:"green",size:e.size}})],1):e._e(),e._v(" "),e.$fetchState.error?t("p",{staticClass:"text-red-900 font-bold text-center mt-10"},[e._v("An error occured while fetching this page !!!")]):e._e(),e._v(" "),t("div",e._l(e.topics,(function(n,r){return t("NuxtLink",{key:r,staticClass:"hover:shadow-md topic bg-white border my-5 shadow rounded p-5 block",attrs:{to:"/general/politics/t?q="+n.href}},[t("h3",{staticClass:"m-3 mb-5 text-green-800 font-semibold hover:underline"},[e._v(e._s(n.text))])])})),1)])}),[],!1,null,null,null);t.default=component.exports}}]);