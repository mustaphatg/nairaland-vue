(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{214:function(t,e,n){"use strict";n.r(e);var o=n(5),r=(n(42),n(217)),c=n.n(r),l={props:["section","topic_url"],mounted:function(){console.log(this.topic_url)},components:{ClipLoader:n(209).a},data:function(){return{topics:[],loading:!0,size:"50px"}},fetch:function(){var t=this;return Object(o.a)(regeneratorRuntime.mark((function e(){var dd;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.$axios.post("/api/category",{name:t.$props.section});case 2:return dd=e.sent,e.next=5,dd.data;case 5:t.topics=e.sent;case 6:case"end":return e.stop()}}),e)})))()},methods:{mFormat:function(t,e){return c()(t).format(e)}}},d=n(2),component=Object(d.a)(l,(function(){var t=this,e=t._self._c;return e("div",[t.$fetchState.pending?e("p",{staticClass:"mt-5"},[e("clip-loader",{attrs:{loading:t.loading,color:"green",size:t.size}})],1):t._e(),t._v(" "),t.$fetchState.error?e("p",{staticClass:"text-red-900 font-bold text-center mt-10"},[t._v("An error occured while fetching this page !!!")]):t._e(),t._v(" "),e("div",t._l(t.topics,(function(n,o){return e("NuxtLink",{key:o,staticClass:"hover:shadow-md topic bg-white border my-5 shadow rounded p-5 block",attrs:{to:t.topic_url+n.href}},[e("h3",{staticClass:"m-3 mb-5 text-green-800 font-semibold hover:underline"},[t._v(t._s(n.text))]),t._v(" "),e("div",{staticClass:"flex mt-3 justify-center font-small text-zinc-800 font-mono"},[e("span",{staticClass:"btn-ghost btn-sm"},[t._v(" Author: "+t._s(n.creator))]),t._v(" "),e("span",{staticClass:"btn-ghost btn-sm"},[t._v(" "+t._s(t.mFormat(n.views,"0.0a"))+" views ")]),t._v(" "),e("span",{staticClass:"btn-ghost btn-sm"},[t._v(" "+t._s(t.mFormat(n.replies,"0.a"))+" replies")])])])})),1)])}),[],!1,null,null,null);e.default=component.exports}}]);