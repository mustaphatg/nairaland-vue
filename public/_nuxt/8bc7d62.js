(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{207:function(t,e,n){var content=n(210);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,n(42).default)("63704ff2",content,!0,{sourceMap:!1})},208:function(t,e,n){"use strict";var r={name:"ClipLoader",props:{loading:{type:Boolean,default:!0},color:{type:String,default:"#5dc596"},size:{type:String,default:"35px"},radius:{type:String,default:"100%"}},computed:{spinnerStyle:function(){return{height:this.size,width:this.size,borderWidth:"2px",borderStyle:"solid",borderColor:this.color+" "+this.color+" transparent",borderRadius:this.radius,background:"transparent"}}}},o=(n(209),n(2)),component=Object(o.a)(r,(function(){var t=this,e=t._self._c;return e("div",{directives:[{name:"show",rawName:"v-show",value:t.loading,expression:"loading"}],staticClass:"v-spinner"},[e("div",{staticClass:"v-clip",style:t.spinnerStyle})])}),[],!1,null,null,null);e.a=component.exports},209:function(t,e,n){"use strict";n(207)},210:function(t,e,n){var r=n(41)((function(i){return i[1]}));r.push([t.i,".v-spinner{text-align:center}.v-spinner .v-clip{animation:v-clipDelay .75s linear 0s infinite;animation-fill-mode:both;display:inline-block}@keyframes v-clipDelay{0%{transform:rotate(0deg) scale(1)}50%{transform:rotate(180deg) scale(.8)}to{transform:rotate(1turn) scale(1)}}",""]),r.locals={},t.exports=r},215:function(t,e,n){"use strict";n.r(e);var r=n(5),o=(n(43),n(216)),l=n.n(o),c={props:["section","topic_url"],mounted:function(){console.log(this.topic_url)},components:{ClipLoader:n(208).a},data:function(){return{topics:[],loading:!0,size:"50px"}},fetch:function(){var t=this;return Object(r.a)(regeneratorRuntime.mark((function e(){var dd;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.$axios.post("/api/category",{name:t.$props.section});case 2:return dd=e.sent,e.next=5,dd.data;case 5:t.topics=e.sent;case 6:case"end":return e.stop()}}),e)})))()},methods:{mFormat:function(t,e){return l()(t).format(e)}}},d=n(2),component=Object(d.a)(c,(function(){var t=this,e=t._self._c;return e("div",[t.$fetchState.pending?e("p",{staticClass:"mt-5"},[e("clip-loader",{attrs:{loading:t.loading,color:"green",size:t.size}})],1):t._e(),t._v(" "),t.$fetchState.error?e("p",{staticClass:"text-red-900 font-bold text-center mt-10"},[t._v("An error occured while fetching this page !!!")]):t._e(),t._v(" "),e("div",t._l(t.topics,(function(n,r){return e("NuxtLink",{key:r,staticClass:"hover:shadow-md topic bg-white border my-5 shadow rounded p-5 block",attrs:{to:t.topic_url+n.href}},[e("h3",{staticClass:"m-3 mb-5 text-green-800 font-semibold hover:underline"},[t._v(t._s(n.text))]),t._v(" "),e("div",{staticClass:"flex mt-3 justify-center font-small text-zinc-800 font-mono"},[e("span",{staticClass:"btn-ghost btn-sm"},[t._v(" Author: "+t._s(n.creator))]),t._v(" "),e("span",{staticClass:"btn-ghost btn-sm"},[t._v(" "+t._s(t.mFormat(n.views,"0.0a"))+" views ")]),t._v(" "),e("span",{staticClass:"btn-ghost btn-sm"},[t._v(" "+t._s(t.mFormat(n.replies,"0.a"))+" replies")])])])})),1)])}),[],!1,null,null,null);e.default=component.exports}}]);