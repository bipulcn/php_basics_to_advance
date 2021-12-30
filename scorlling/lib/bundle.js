!(function () {
    "use strict";
    var t = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (t) {
            window.setTimeout(t, 1e3);
        };
    (new (class {
        constructor(t) {
            Object.assign(this, t), this.target || (this.target = document.scrollingElement || document.documentElement || document.body.parentNode || document.body),
                (this.speed = this.speed || 80), (this.smooth = this.smooth || 12), (this.pos = this.current || 0),
                (this.frame = this.target === document.body && document.documentElement ? document.documentElement : this.target),
                (this.min = this.min || 0), (this.max = this.target.scrollHeight - this.target.clientHeight),
                (this.moving = !1), (this.target.scrollTop = this.pos),
                this.target.addEventListener("mousewheel", o, { passive: !1 }),
                this.target.addEventListener("DOMMouseScroll", o, { passive: !1 }),
                this.target.addEventListener("scroll",
                    (t) => {
                        this.moving || (this.pos = t.target.scrollTop);
                    },
                    { passive: !1 }
                );
            const e = this;
            function o(t) {
                var o = e.normalizeWheelDelta(t);
                (e.pos += -o * e.speed), (e.pos = Math.max(0, Math.min(e.pos, e.max))), e.moving || e.update();
            }
        }
        normalizeWheelDelta(t) {
            return t.detail ? (t.wheelDelta ? (t.wheelDelta / t.detail / 40) * (t.detail > 0 ? 1 : -1) : -t.detail / 3) : t.wheelDelta / 120;
        }
        update() {
            this.moving = !0;
            var e = (this.pos - this.target.scrollTop) / this.smooth;
            (this.target.scrollTop += e), this.onUpdate && this.onUpdate(this.target.scrollTop);
            const o = this;
            Math.abs(e) > 1
                ? t(() => {
                      o.update();
                  })
                : (this.moving = !1);
        }
    })({ target: document.querySelector(".scroll-view.after"), speed: 80, smooth: 12 }).onUpdate = (t) => {
        console.log(t), (document.querySelector("#after-scroll").innerHTML = Math.round(t));
    }), document.querySelector(".scroll-view.before").addEventListener("scroll", (t) => {
        document.querySelector("#before-scroll").innerHTML = t.target.scrollTop;
    });
})();
//# sourceMappingURL=bundle.js.map
