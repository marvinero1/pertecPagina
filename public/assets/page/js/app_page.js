/*! jQuery v2.1.1 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */ ! function (a, b) {
    "object" == typeof module && "object" == typeof module.exports ? module.exports = a.document ? b(a, !0) : function (a) {
        if (!a.document) throw new Error("jQuery requires a window with a document");
        return b(a)
    } : b(a)
}("undefined" != typeof window ? window : this, function (a, b) {
    var c = [],
        d = c.slice,
        e = c.concat,
        f = c.push,
        g = c.indexOf,
        h = {},
        i = h.toString,
        j = h.hasOwnProperty,
        k = {},
        l = a.document,
        m = "2.1.1",
        n = function (a, b) {
            return new n.fn.init(a, b)
        },
        o = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        p = /^-ms-/,
        q = /-([\da-z])/gi,
        r = function (a, b) {
            return b.toUpperCase()
        };
    n.fn = n.prototype = {
        jquery: m,
        constructor: n,
        selector: "",
        length: 0,
        toArray: function () {
            return d.call(this)
        },
        get: function (a) {
            return null != a ? 0 > a ? this[a + this.length] : this[a] : d.call(this)
        },
        pushStack: function (a) {
            var b = n.merge(this.constructor(), a);
            return b.prevObject = this, b.context = this.context, b
        },
        each: function (a, b) {
            return n.each(this, a, b)
        },
        map: function (a) {
            return this.pushStack(n.map(this, function (b, c) {
                return a.call(b, c, b)
            }))
        },
        slice: function () {
            return this.pushStack(d.apply(this, arguments))
        },
        first: function () {
            return this.eq(0)
        },
        last: function () {
            return this.eq(-1)
        },
        eq: function (a) {
            var b = this.length,
                c = +a + (0 > a ? b : 0);
            return this.pushStack(c >= 0 && b > c ? [this[c]] : [])
        },
        end: function () {
            return this.prevObject || this.constructor(null)
        },
        push: f,
        sort: c.sort,
        splice: c.splice
    }, n.extend = n.fn.extend = function () {
        var a, b, c, d, e, f, g = arguments[0] || {},
            h = 1,
            i = arguments.length,
            j = !1;
        for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || n.isFunction(g) || (g = {}), h === i && (g = this, h--); i > h; h++)
            if (null != (a = arguments[h]))
                for (b in a) c = g[b], d = a[b], g !== d && (j && d && (n.isPlainObject(d) || (e = n.isArray(d))) ? (e ? (e = !1, f = c && n.isArray(c) ? c : []) : f = c && n.isPlainObject(c) ? c : {}, g[b] = n.extend(j, f, d)) : void 0 !== d && (g[b] = d));
        return g
    }, n.extend({
        expando: "jQuery" + (m + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function (a) {
            throw new Error(a)
        },
        noop: function () {},
        isFunction: function (a) {
            return "function" === n.type(a)
        },
        isArray: Array.isArray,
        isWindow: function (a) {
            return null != a && a === a.window
        },
        isNumeric: function (a) {
            return !n.isArray(a) && a - parseFloat(a) >= 0
        },
        isPlainObject: function (a) {
            return "object" !== n.type(a) || a.nodeType || n.isWindow(a) ? !1 : a.constructor && !j.call(a.constructor.prototype, "isPrototypeOf") ? !1 : !0
        },
        isEmptyObject: function (a) {
            var b;
            for (b in a) return !1;
            return !0
        },
        type: function (a) {
            return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? h[i.call(a)] || "object" : typeof a
        },
        globalEval: function (a) {
            var b, c = eval;
            a = n.trim(a), a && (1 === a.indexOf("use strict") ? (b = l.createElement("script"), b.text = a, l.head.appendChild(b).parentNode.removeChild(b)) : c(a))
        },
        camelCase: function (a) {
            return a.replace(p, "ms-").replace(q, r)
        },
        nodeName: function (a, b) {
            return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
        },
        each: function (a, b, c) {
            var d, e = 0,
                f = a.length,
                g = s(a);
            if (c) {
                if (g) {
                    for (; f > e; e++)
                        if (d = b.apply(a[e], c), d === !1) break
                } else
                    for (e in a)
                        if (d = b.apply(a[e], c), d === !1) break
            } else if (g) {
                for (; f > e; e++)
                    if (d = b.call(a[e], e, a[e]), d === !1) break
            } else
                for (e in a)
                    if (d = b.call(a[e], e, a[e]), d === !1) break;
            return a
        },
        trim: function (a) {
            return null == a ? "" : (a + "").replace(o, "")
        },
        makeArray: function (a, b) {
            var c = b || [];
            return null != a && (s(Object(a)) ? n.merge(c, "string" == typeof a ? [a] : a) : f.call(c, a)), c
        },
        inArray: function (a, b, c) {
            return null == b ? -1 : g.call(b, a, c)
        },
        merge: function (a, b) {
            for (var c = +b.length, d = 0, e = a.length; c > d; d++) a[e++] = b[d];
            return a.length = e, a
        },
        grep: function (a, b, c) {
            for (var d, e = [], f = 0, g = a.length, h = !c; g > f; f++) d = !b(a[f], f), d !== h && e.push(a[f]);
            return e
        },
        map: function (a, b, c) {
            var d, f = 0,
                g = a.length,
                h = s(a),
                i = [];
            if (h)
                for (; g > f; f++) d = b(a[f], f, c), null != d && i.push(d);
            else
                for (f in a) d = b(a[f], f, c), null != d && i.push(d);
            return e.apply([], i)
        },
        guid: 1,
        proxy: function (a, b) {
            var c, e, f;
            return "string" == typeof b && (c = a[b], b = a, a = c), n.isFunction(a) ? (e = d.call(arguments, 2), f = function () {
                return a.apply(b || this, e.concat(d.call(arguments)))
            }, f.guid = a.guid = a.guid || n.guid++, f) : void 0
        },
        now: Date.now,
        support: k
    }), n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function (a, b) {
        h["[object " + b + "]"] = b.toLowerCase()
    });

    function s(a) {
        var b = a.length,
            c = n.type(a);
        return "function" === c || n.isWindow(a) ? !1 : 1 === a.nodeType && b ? !0 : "array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a
    }
    var t = function (a) {
        var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u = "sizzle" + -new Date,
            v = a.document,
            w = 0,
            x = 0,
            y = gb(),
            z = gb(),
            A = gb(),
            B = function (a, b) {
                return a === b && (l = !0), 0
            },
            C = "undefined",
            D = 1 << 31,
            E = {}.hasOwnProperty,
            F = [],
            G = F.pop,
            H = F.push,
            I = F.push,
            J = F.slice,
            K = F.indexOf || function (a) {
                for (var b = 0, c = this.length; c > b; b++)
                    if (this[b] === a) return b;
                return -1
            },
            L = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            M = "[\\x20\\t\\r\\n\\f]",
            N = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
            O = N.replace("w", "w#"),
            P = "\\[" + M + "*(" + N + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + O + "))|)" + M + "*\\]",
            Q = ":(" + N + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + P + ")*)|.*)\\)|)",
            R = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
            S = new RegExp("^" + M + "*," + M + "*"),
            T = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
            U = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"),
            V = new RegExp(Q),
            W = new RegExp("^" + O + "$"),
            X = {
                ID: new RegExp("^#(" + N + ")"),
                CLASS: new RegExp("^\\.(" + N + ")"),
                TAG: new RegExp("^(" + N.replace("w", "w*") + ")"),
                ATTR: new RegExp("^" + P),
                PSEUDO: new RegExp("^" + Q),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + L + ")$", "i"),
                needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
            },
            Y = /^(?:input|select|textarea|button)$/i,
            Z = /^h\d$/i,
            $ = /^[^{]+\{\s*\[native \w/,
            _ = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            ab = /[+~]/,
            bb = /'|\\/g,
            cb = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"),
            db = function (a, b, c) {
                var d = "0x" + b - 65536;
                return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
            };
        try {
            I.apply(F = J.call(v.childNodes), v.childNodes), F[v.childNodes.length].nodeType
        } catch (eb) {
            I = {
                apply: F.length ? function (a, b) {
                    H.apply(a, J.call(b))
                } : function (a, b) {
                    var c = a.length,
                        d = 0;
                    while (a[c++] = b[d++]);
                    a.length = c - 1
                }
            }
        }

        function fb(a, b, d, e) {
            var f, h, j, k, l, o, r, s, w, x;
            if ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, d = d || [], !a || "string" != typeof a) return d;
            if (1 !== (k = b.nodeType) && 9 !== k) return [];
            if (p && !e) {
                if (f = _.exec(a))
                    if (j = f[1]) {
                        if (9 === k) {
                            if (h = b.getElementById(j), !h || !h.parentNode) return d;
                            if (h.id === j) return d.push(h), d
                        } else if (b.ownerDocument && (h = b.ownerDocument.getElementById(j)) && t(b, h) && h.id === j) return d.push(h), d
                    } else {
                        if (f[2]) return I.apply(d, b.getElementsByTagName(a)), d;
                        if ((j = f[3]) && c.getElementsByClassName && b.getElementsByClassName) return I.apply(d, b.getElementsByClassName(j)), d
                    } if (c.qsa && (!q || !q.test(a))) {
                    if (s = r = u, w = b, x = 9 === k && a, 1 === k && "object" !== b.nodeName.toLowerCase()) {
                        o = g(a), (r = b.getAttribute("id")) ? s = r.replace(bb, "\\$&") : b.setAttribute("id", s), s = "[id='" + s + "'] ", l = o.length;
                        while (l--) o[l] = s + qb(o[l]);
                        w = ab.test(a) && ob(b.parentNode) || b, x = o.join(",")
                    }
                    if (x) try {
                        return I.apply(d, w.querySelectorAll(x)), d
                    } catch (y) {} finally {
                        r || b.removeAttribute("id")
                    }
                }
            }
            return i(a.replace(R, "$1"), b, d, e)
        }

        function gb() {
            var a = [];

            function b(c, e) {
                return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
            }
            return b
        }

        function hb(a) {
            return a[u] = !0, a
        }

        function ib(a) {
            var b = n.createElement("div");
            try {
                return !!a(b)
            } catch (c) {
                return !1
            } finally {
                b.parentNode && b.parentNode.removeChild(b), b = null
            }
        }

        function jb(a, b) {
            var c = a.split("|"),
                e = a.length;
            while (e--) d.attrHandle[c[e]] = b
        }

        function kb(a, b) {
            var c = b && a,
                d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || D) - (~a.sourceIndex || D);
            if (d) return d;
            if (c)
                while (c = c.nextSibling)
                    if (c === b) return -1;
            return a ? 1 : -1
        }

        function lb(a) {
            return function (b) {
                var c = b.nodeName.toLowerCase();
                return "input" === c && b.type === a
            }
        }

        function mb(a) {
            return function (b) {
                var c = b.nodeName.toLowerCase();
                return ("input" === c || "button" === c) && b.type === a
            }
        }

        function nb(a) {
            return hb(function (b) {
                return b = +b, hb(function (c, d) {
                    var e, f = a([], c.length, b),
                        g = f.length;
                    while (g--) c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                })
            })
        }

        function ob(a) {
            return a && typeof a.getElementsByTagName !== C && a
        }
        c = fb.support = {}, f = fb.isXML = function (a) {
            var b = a && (a.ownerDocument || a).documentElement;
            return b ? "HTML" !== b.nodeName : !1
        }, m = fb.setDocument = function (a) {
            var b, e = a ? a.ownerDocument || a : v,
                g = e.defaultView;
            return e !== n && 9 === e.nodeType && e.documentElement ? (n = e, o = e.documentElement, p = !f(e), g && g !== g.top && (g.addEventListener ? g.addEventListener("unload", function () {
                m()
            }, !1) : g.attachEvent && g.attachEvent("onunload", function () {
                m()
            })), c.attributes = ib(function (a) {
                return a.className = "i", !a.getAttribute("className")
            }), c.getElementsByTagName = ib(function (a) {
                return a.appendChild(e.createComment("")), !a.getElementsByTagName("*").length
            }), c.getElementsByClassName = $.test(e.getElementsByClassName) && ib(function (a) {
                return a.innerHTML = "<div class='a'></div><div class='a i'></div>", a.firstChild.className = "i", 2 === a.getElementsByClassName("i").length
            }), c.getById = ib(function (a) {
                return o.appendChild(a).id = u, !e.getElementsByName || !e.getElementsByName(u).length
            }), c.getById ? (d.find.ID = function (a, b) {
                if (typeof b.getElementById !== C && p) {
                    var c = b.getElementById(a);
                    return c && c.parentNode ? [c] : []
                }
            }, d.filter.ID = function (a) {
                var b = a.replace(cb, db);
                return function (a) {
                    return a.getAttribute("id") === b
                }
            }) : (delete d.find.ID, d.filter.ID = function (a) {
                var b = a.replace(cb, db);
                return function (a) {
                    var c = typeof a.getAttributeNode !== C && a.getAttributeNode("id");
                    return c && c.value === b
                }
            }), d.find.TAG = c.getElementsByTagName ? function (a, b) {
                return typeof b.getElementsByTagName !== C ? b.getElementsByTagName(a) : void 0
            } : function (a, b) {
                var c, d = [],
                    e = 0,
                    f = b.getElementsByTagName(a);
                if ("*" === a) {
                    while (c = f[e++]) 1 === c.nodeType && d.push(c);
                    return d
                }
                return f
            }, d.find.CLASS = c.getElementsByClassName && function (a, b) {
                return typeof b.getElementsByClassName !== C && p ? b.getElementsByClassName(a) : void 0
            }, r = [], q = [], (c.qsa = $.test(e.querySelectorAll)) && (ib(function (a) {
                a.innerHTML = "<select msallowclip=''><option selected=''></option></select>", a.querySelectorAll("[msallowclip^='']").length && q.push("[*^$]=" + M + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + M + "*(?:value|" + L + ")"), a.querySelectorAll(":checked").length || q.push(":checked")
            }), ib(function (a) {
                var b = e.createElement("input");
                b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + M + "*[*^$|!~]?="), a.querySelectorAll(":enabled").length || q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:")
            })), (c.matchesSelector = $.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ib(function (a) {
                c.disconnectedMatch = s.call(a, "div"), s.call(a, "[s!='']:x"), r.push("!=", Q)
            }), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = $.test(o.compareDocumentPosition), t = b || $.test(o.contains) ? function (a, b) {
                var c = 9 === a.nodeType ? a.documentElement : a,
                    d = b && b.parentNode;
                return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
            } : function (a, b) {
                if (b)
                    while (b = b.parentNode)
                        if (b === a) return !0;
                return !1
            }, B = b ? function (a, b) {
                if (a === b) return l = !0, 0;
                var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === e || a.ownerDocument === v && t(v, a) ? -1 : b === e || b.ownerDocument === v && t(v, b) ? 1 : k ? K.call(k, a) - K.call(k, b) : 0 : 4 & d ? -1 : 1)
            } : function (a, b) {
                if (a === b) return l = !0, 0;
                var c, d = 0,
                    f = a.parentNode,
                    g = b.parentNode,
                    h = [a],
                    i = [b];
                if (!f || !g) return a === e ? -1 : b === e ? 1 : f ? -1 : g ? 1 : k ? K.call(k, a) - K.call(k, b) : 0;
                if (f === g) return kb(a, b);
                c = a;
                while (c = c.parentNode) h.unshift(c);
                c = b;
                while (c = c.parentNode) i.unshift(c);
                while (h[d] === i[d]) d++;
                return d ? kb(h[d], i[d]) : h[d] === v ? -1 : i[d] === v ? 1 : 0
            }, e) : n
        }, fb.matches = function (a, b) {
            return fb(a, null, null, b)
        }, fb.matchesSelector = function (a, b) {
            if ((a.ownerDocument || a) !== n && m(a), b = b.replace(U, "='$1']"), !(!c.matchesSelector || !p || r && r.test(b) || q && q.test(b))) try {
                var d = s.call(a, b);
                if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) return d
            } catch (e) {}
            return fb(b, n, null, [a]).length > 0
        }, fb.contains = function (a, b) {
            return (a.ownerDocument || a) !== n && m(a), t(a, b)
        }, fb.attr = function (a, b) {
            (a.ownerDocument || a) !== n && m(a);
            var e = d.attrHandle[b.toLowerCase()],
                f = e && E.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
            return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null
        }, fb.error = function (a) {
            throw new Error("Syntax error, unrecognized expression: " + a)
        }, fb.uniqueSort = function (a) {
            var b, d = [],
                e = 0,
                f = 0;
            if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
                while (b = a[f++]) b === a[f] && (e = d.push(f));
                while (e--) a.splice(d[e], 1)
            }
            return k = null, a
        }, e = fb.getText = function (a) {
            var b, c = "",
                d = 0,
                f = a.nodeType;
            if (f) {
                if (1 === f || 9 === f || 11 === f) {
                    if ("string" == typeof a.textContent) return a.textContent;
                    for (a = a.firstChild; a; a = a.nextSibling) c += e(a)
                } else if (3 === f || 4 === f) return a.nodeValue
            } else
                while (b = a[d++]) c += e(b);
            return c
        }, d = fb.selectors = {
            cacheLength: 50,
            createPseudo: hb,
            match: X,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function (a) {
                    return a[1] = a[1].replace(cb, db), a[3] = (a[3] || a[4] || a[5] || "").replace(cb, db), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                },
                CHILD: function (a) {
                    return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || fb.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && fb.error(a[0]), a
                },
                PSEUDO: function (a) {
                    var b, c = !a[6] && a[2];
                    return X.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && V.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3))
                }
            },
            filter: {
                TAG: function (a) {
                    var b = a.replace(cb, db).toLowerCase();
                    return "*" === a ? function () {
                        return !0
                    } : function (a) {
                        return a.nodeName && a.nodeName.toLowerCase() === b
                    }
                },
                CLASS: function (a) {
                    var b = y[a + " "];
                    return b || (b = new RegExp("(^|" + M + ")" + a + "(" + M + "|$)")) && y(a, function (a) {
                        return b.test("string" == typeof a.className && a.className || typeof a.getAttribute !== C && a.getAttribute("class") || "")
                    })
                },
                ATTR: function (a, b, c) {
                    return function (d) {
                        var e = fb.attr(d, a);
                        return null == e ? "!=" === b : b ? (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e + " ").indexOf(c) > -1 : "|=" === b ? e === c || e.slice(0, c.length + 1) === c + "-" : !1) : !0
                    }
                },
                CHILD: function (a, b, c, d, e) {
                    var f = "nth" !== a.slice(0, 3),
                        g = "last" !== a.slice(-4),
                        h = "of-type" === b;
                    return 1 === d && 0 === e ? function (a) {
                        return !!a.parentNode
                    } : function (b, c, i) {
                        var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling",
                            q = b.parentNode,
                            r = h && b.nodeName.toLowerCase(),
                            s = !i && !h;
                        if (q) {
                            if (f) {
                                while (p) {
                                    l = b;
                                    while (l = l[p])
                                        if (h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) return !1;
                                    o = p = "only" === a && !o && "nextSibling"
                                }
                                return !0
                            }
                            if (o = [g ? q.firstChild : q.lastChild], g && s) {
                                k = q[u] || (q[u] = {}), j = k[a] || [], n = j[0] === w && j[1], m = j[0] === w && j[2], l = n && q.childNodes[n];
                                while (l = ++n && l && l[p] || (m = n = 0) || o.pop())
                                    if (1 === l.nodeType && ++m && l === b) {
                                        k[a] = [w, n, m];
                                        break
                                    }
                            } else if (s && (j = (b[u] || (b[u] = {}))[a]) && j[0] === w) m = j[1];
                            else
                                while (l = ++n && l && l[p] || (m = n = 0) || o.pop())
                                    if ((h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) && ++m && (s && ((l[u] || (l[u] = {}))[a] = [w, m]), l === b)) break;
                            return m -= e, m === d || m % d === 0 && m / d >= 0
                        }
                    }
                },
                PSEUDO: function (a, b) {
                    var c, e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || fb.error("unsupported pseudo: " + a);
                    return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? hb(function (a, c) {
                        var d, f = e(a, b),
                            g = f.length;
                        while (g--) d = K.call(a, f[g]), a[d] = !(c[d] = f[g])
                    }) : function (a) {
                        return e(a, 0, c)
                    }) : e
                }
            },
            pseudos: {
                not: hb(function (a) {
                    var b = [],
                        c = [],
                        d = h(a.replace(R, "$1"));
                    return d[u] ? hb(function (a, b, c, e) {
                        var f, g = d(a, null, e, []),
                            h = a.length;
                        while (h--)(f = g[h]) && (a[h] = !(b[h] = f))
                    }) : function (a, e, f) {
                        return b[0] = a, d(b, null, f, c), !c.pop()
                    }
                }),
                has: hb(function (a) {
                    return function (b) {
                        return fb(a, b).length > 0
                    }
                }),
                contains: hb(function (a) {
                    return function (b) {
                        return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
                    }
                }),
                lang: hb(function (a) {
                    return W.test(a || "") || fb.error("unsupported lang: " + a), a = a.replace(cb, db).toLowerCase(),
                        function (b) {
                            var c;
                            do
                                if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang")) return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-"); while ((b = b.parentNode) && 1 === b.nodeType);
                            return !1
                        }
                }),
                target: function (b) {
                    var c = a.location && a.location.hash;
                    return c && c.slice(1) === b.id
                },
                root: function (a) {
                    return a === o
                },
                focus: function (a) {
                    return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
                },
                enabled: function (a) {
                    return a.disabled === !1
                },
                disabled: function (a) {
                    return a.disabled === !0
                },
                checked: function (a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && !!a.checked || "option" === b && !!a.selected
                },
                selected: function (a) {
                    return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                },
                empty: function (a) {
                    for (a = a.firstChild; a; a = a.nextSibling)
                        if (a.nodeType < 6) return !1;
                    return !0
                },
                parent: function (a) {
                    return !d.pseudos.empty(a)
                },
                header: function (a) {
                    return Z.test(a.nodeName)
                },
                input: function (a) {
                    return Y.test(a.nodeName)
                },
                button: function (a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && "button" === a.type || "button" === b
                },
                text: function (a) {
                    var b;
                    return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase())
                },
                first: nb(function () {
                    return [0]
                }),
                last: nb(function (a, b) {
                    return [b - 1]
                }),
                eq: nb(function (a, b, c) {
                    return [0 > c ? c + b : c]
                }),
                even: nb(function (a, b) {
                    for (var c = 0; b > c; c += 2) a.push(c);
                    return a
                }),
                odd: nb(function (a, b) {
                    for (var c = 1; b > c; c += 2) a.push(c);
                    return a
                }),
                lt: nb(function (a, b, c) {
                    for (var d = 0 > c ? c + b : c; --d >= 0;) a.push(d);
                    return a
                }),
                gt: nb(function (a, b, c) {
                    for (var d = 0 > c ? c + b : c; ++d < b;) a.push(d);
                    return a
                })
            }
        }, d.pseudos.nth = d.pseudos.eq;
        for (b in {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) d.pseudos[b] = lb(b);
        for (b in {
                submit: !0,
                reset: !0
            }) d.pseudos[b] = mb(b);

        function pb() {}
        pb.prototype = d.filters = d.pseudos, d.setFilters = new pb, g = fb.tokenize = function (a, b) {
            var c, e, f, g, h, i, j, k = z[a + " "];
            if (k) return b ? 0 : k.slice(0);
            h = a, i = [], j = d.preFilter;
            while (h) {
                (!c || (e = S.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = T.exec(h)) && (c = e.shift(), f.push({
                    value: c,
                    type: e[0].replace(R, " ")
                }), h = h.slice(c.length));
                for (g in d.filter) !(e = X[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({
                    value: c,
                    type: g,
                    matches: e
                }), h = h.slice(c.length));
                if (!c) break
            }
            return b ? h.length : h ? fb.error(a) : z(a, i).slice(0)
        };

        function qb(a) {
            for (var b = 0, c = a.length, d = ""; c > b; b++) d += a[b].value;
            return d
        }

        function rb(a, b, c) {
            var d = b.dir,
                e = c && "parentNode" === d,
                f = x++;
            return b.first ? function (b, c, f) {
                while (b = b[d])
                    if (1 === b.nodeType || e) return a(b, c, f)
            } : function (b, c, g) {
                var h, i, j = [w, f];
                if (g) {
                    while (b = b[d])
                        if ((1 === b.nodeType || e) && a(b, c, g)) return !0
                } else
                    while (b = b[d])
                        if (1 === b.nodeType || e) {
                            if (i = b[u] || (b[u] = {}), (h = i[d]) && h[0] === w && h[1] === f) return j[2] = h[2];
                            if (i[d] = j, j[2] = a(b, c, g)) return !0
                        }
            }
        }

        function sb(a) {
            return a.length > 1 ? function (b, c, d) {
                var e = a.length;
                while (e--)
                    if (!a[e](b, c, d)) return !1;
                return !0
            } : a[0]
        }

        function tb(a, b, c) {
            for (var d = 0, e = b.length; e > d; d++) fb(a, b[d], c);
            return c
        }

        function ub(a, b, c, d, e) {
            for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++)(f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
            return g
        }

        function vb(a, b, c, d, e, f) {
            return d && !d[u] && (d = vb(d)), e && !e[u] && (e = vb(e, f)), hb(function (f, g, h, i) {
                var j, k, l, m = [],
                    n = [],
                    o = g.length,
                    p = f || tb(b || "*", h.nodeType ? [h] : h, []),
                    q = !a || !f && b ? p : ub(p, m, a, h, i),
                    r = c ? e || (f ? a : o || d) ? [] : g : q;
                if (c && c(q, r, h, i), d) {
                    j = ub(r, n), d(j, [], h, i), k = j.length;
                    while (k--)(l = j[k]) && (r[n[k]] = !(q[n[k]] = l))
                }
                if (f) {
                    if (e || a) {
                        if (e) {
                            j = [], k = r.length;
                            while (k--)(l = r[k]) && j.push(q[k] = l);
                            e(null, r = [], j, i)
                        }
                        k = r.length;
                        while (k--)(l = r[k]) && (j = e ? K.call(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l))
                    }
                } else r = ub(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : I.apply(g, r)
            })
        }

        function wb(a) {
            for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = rb(function (a) {
                    return a === b
                }, h, !0), l = rb(function (a) {
                    return K.call(b, a) > -1
                }, h, !0), m = [function (a, c, d) {
                    return !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d))
                }]; f > i; i++)
                if (c = d.relative[a[i].type]) m = [rb(sb(m), c)];
                else {
                    if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
                        for (e = ++i; f > e; e++)
                            if (d.relative[a[e].type]) break;
                        return vb(i > 1 && sb(m), i > 1 && qb(a.slice(0, i - 1).concat({
                            value: " " === a[i - 2].type ? "*" : ""
                        })).replace(R, "$1"), c, e > i && wb(a.slice(i, e)), f > e && wb(a = a.slice(e)), f > e && qb(a))
                    }
                    m.push(c)
                } return sb(m)
        }

        function xb(a, b) {
            var c = b.length > 0,
                e = a.length > 0,
                f = function (f, g, h, i, k) {
                    var l, m, o, p = 0,
                        q = "0",
                        r = f && [],
                        s = [],
                        t = j,
                        u = f || e && d.find.TAG("*", k),
                        v = w += null == t ? 1 : Math.random() || .1,
                        x = u.length;
                    for (k && (j = g !== n && g); q !== x && null != (l = u[q]); q++) {
                        if (e && l) {
                            m = 0;
                            while (o = a[m++])
                                if (o(l, g, h)) {
                                    i.push(l);
                                    break
                                } k && (w = v)
                        }
                        c && ((l = !o && l) && p--, f && r.push(l))
                    }
                    if (p += q, c && q !== p) {
                        m = 0;
                        while (o = b[m++]) o(r, s, g, h);
                        if (f) {
                            if (p > 0)
                                while (q--) r[q] || s[q] || (s[q] = G.call(i));
                            s = ub(s)
                        }
                        I.apply(i, s), k && !f && s.length > 0 && p + b.length > 1 && fb.uniqueSort(i)
                    }
                    return k && (w = v, j = t), r
                };
            return c ? hb(f) : f
        }
        return h = fb.compile = function (a, b) {
            var c, d = [],
                e = [],
                f = A[a + " "];
            if (!f) {
                b || (b = g(a)), c = b.length;
                while (c--) f = wb(b[c]), f[u] ? d.push(f) : e.push(f);
                f = A(a, xb(e, d)), f.selector = a
            }
            return f
        }, i = fb.select = function (a, b, e, f) {
            var i, j, k, l, m, n = "function" == typeof a && a,
                o = !f && g(a = n.selector || a);
            if (e = e || [], 1 === o.length) {
                if (j = o[0] = o[0].slice(0), j.length > 2 && "ID" === (k = j[0]).type && c.getById && 9 === b.nodeType && p && d.relative[j[1].type]) {
                    if (b = (d.find.ID(k.matches[0].replace(cb, db), b) || [])[0], !b) return e;
                    n && (b = b.parentNode), a = a.slice(j.shift().value.length)
                }
                i = X.needsContext.test(a) ? 0 : j.length;
                while (i--) {
                    if (k = j[i], d.relative[l = k.type]) break;
                    if ((m = d.find[l]) && (f = m(k.matches[0].replace(cb, db), ab.test(j[0].type) && ob(b.parentNode) || b))) {
                        if (j.splice(i, 1), a = f.length && qb(j), !a) return I.apply(e, f), e;
                        break
                    }
                }
            }
            return (n || h(a, o))(f, b, !p, e, ab.test(a) && ob(b.parentNode) || b), e
        }, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ib(function (a) {
            return 1 & a.compareDocumentPosition(n.createElement("div"))
        }), ib(function (a) {
            return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
        }) || jb("type|href|height|width", function (a, b, c) {
            return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
        }), c.attributes && ib(function (a) {
            return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
        }) || jb("value", function (a, b, c) {
            return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue
        }), ib(function (a) {
            return null == a.getAttribute("disabled")
        }) || jb(L, function (a, b, c) {
            var d;
            return c ? void 0 : a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null
        }), fb
    }(a);
    n.find = t, n.expr = t.selectors, n.expr[":"] = n.expr.pseudos, n.unique = t.uniqueSort, n.text = t.getText, n.isXMLDoc = t.isXML, n.contains = t.contains;
    var u = n.expr.match.needsContext,
        v = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
        w = /^.[^:#\[\.,]*$/;

    function x(a, b, c) {
        if (n.isFunction(b)) return n.grep(a, function (a, d) {
            return !!b.call(a, d, a) !== c
        });
        if (b.nodeType) return n.grep(a, function (a) {
            return a === b !== c
        });
        if ("string" == typeof b) {
            if (w.test(b)) return n.filter(b, a, c);
            b = n.filter(b, a)
        }
        return n.grep(a, function (a) {
            return g.call(b, a) >= 0 !== c
        })
    }
    n.filter = function (a, b, c) {
        var d = b[0];
        return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? n.find.matchesSelector(d, a) ? [d] : [] : n.find.matches(a, n.grep(b, function (a) {
            return 1 === a.nodeType
        }))
    }, n.fn.extend({
        find: function (a) {
            var b, c = this.length,
                d = [],
                e = this;
            if ("string" != typeof a) return this.pushStack(n(a).filter(function () {
                for (b = 0; c > b; b++)
                    if (n.contains(e[b], this)) return !0
            }));
            for (b = 0; c > b; b++) n.find(a, e[b], d);
            return d = this.pushStack(c > 1 ? n.unique(d) : d), d.selector = this.selector ? this.selector + " " + a : a, d
        },
        filter: function (a) {
            return this.pushStack(x(this, a || [], !1))
        },
        not: function (a) {
            return this.pushStack(x(this, a || [], !0))
        },
        is: function (a) {
            return !!x(this, "string" == typeof a && u.test(a) ? n(a) : a || [], !1).length
        }
    });
    var y, z = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
        A = n.fn.init = function (a, b) {
            var c, d;
            if (!a) return this;
            if ("string" == typeof a) {
                if (c = "<" === a[0] && ">" === a[a.length - 1] && a.length >= 3 ? [null, a, null] : z.exec(a), !c || !c[1] && b) return !b || b.jquery ? (b || y).find(a) : this.constructor(b).find(a);
                if (c[1]) {
                    if (b = b instanceof n ? b[0] : b, n.merge(this, n.parseHTML(c[1], b && b.nodeType ? b.ownerDocument || b : l, !0)), v.test(c[1]) && n.isPlainObject(b))
                        for (c in b) n.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c]);
                    return this
                }
                return d = l.getElementById(c[2]), d && d.parentNode && (this.length = 1, this[0] = d), this.context = l, this.selector = a, this
            }
            return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : n.isFunction(a) ? "undefined" != typeof y.ready ? y.ready(a) : a(n) : (void 0 !== a.selector && (this.selector = a.selector, this.context = a.context), n.makeArray(a, this))
        };
    A.prototype = n.fn, y = n(l);
    var B = /^(?:parents|prev(?:Until|All))/,
        C = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };
    n.extend({
        dir: function (a, b, c) {
            var d = [],
                e = void 0 !== c;
            while ((a = a[b]) && 9 !== a.nodeType)
                if (1 === a.nodeType) {
                    if (e && n(a).is(c)) break;
                    d.push(a)
                } return d
        },
        sibling: function (a, b) {
            for (var c = []; a; a = a.nextSibling) 1 === a.nodeType && a !== b && c.push(a);
            return c
        }
    }), n.fn.extend({
        has: function (a) {
            var b = n(a, this),
                c = b.length;
            return this.filter(function () {
                for (var a = 0; c > a; a++)
                    if (n.contains(this, b[a])) return !0
            })
        },
        closest: function (a, b) {
            for (var c, d = 0, e = this.length, f = [], g = u.test(a) || "string" != typeof a ? n(a, b || this.context) : 0; e > d; d++)
                for (c = this[d]; c && c !== b; c = c.parentNode)
                    if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && n.find.matchesSelector(c, a))) {
                        f.push(c);
                        break
                    } return this.pushStack(f.length > 1 ? n.unique(f) : f)
        },
        index: function (a) {
            return a ? "string" == typeof a ? g.call(n(a), this[0]) : g.call(this, a.jquery ? a[0] : a) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function (a, b) {
            return this.pushStack(n.unique(n.merge(this.get(), n(a, b))))
        },
        addBack: function (a) {
            return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
        }
    });

    function D(a, b) {
        while ((a = a[b]) && 1 !== a.nodeType);
        return a
    }
    n.each({
        parent: function (a) {
            var b = a.parentNode;
            return b && 11 !== b.nodeType ? b : null
        },
        parents: function (a) {
            return n.dir(a, "parentNode")
        },
        parentsUntil: function (a, b, c) {
            return n.dir(a, "parentNode", c)
        },
        next: function (a) {
            return D(a, "nextSibling")
        },
        prev: function (a) {
            return D(a, "previousSibling")
        },
        nextAll: function (a) {
            return n.dir(a, "nextSibling")
        },
        prevAll: function (a) {
            return n.dir(a, "previousSibling")
        },
        nextUntil: function (a, b, c) {
            return n.dir(a, "nextSibling", c)
        },
        prevUntil: function (a, b, c) {
            return n.dir(a, "previousSibling", c)
        },
        siblings: function (a) {
            return n.sibling((a.parentNode || {}).firstChild, a)
        },
        children: function (a) {
            return n.sibling(a.firstChild)
        },
        contents: function (a) {
            return a.contentDocument || n.merge([], a.childNodes)
        }
    }, function (a, b) {
        n.fn[a] = function (c, d) {
            var e = n.map(this, b, c);
            return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = n.filter(d, e)), this.length > 1 && (C[a] || n.unique(e), B.test(a) && e.reverse()), this.pushStack(e)
        }
    });
    var E = /\S+/g,
        F = {};

    function G(a) {
        var b = F[a] = {};
        return n.each(a.match(E) || [], function (a, c) {
            b[c] = !0
        }), b
    }
    n.Callbacks = function (a) {
        a = "string" == typeof a ? F[a] || G(a) : n.extend({}, a);
        var b, c, d, e, f, g, h = [],
            i = !a.once && [],
            j = function (l) {
                for (b = a.memory && l, c = !0, g = e || 0, e = 0, f = h.length, d = !0; h && f > g; g++)
                    if (h[g].apply(l[0], l[1]) === !1 && a.stopOnFalse) {
                        b = !1;
                        break
                    } d = !1, h && (i ? i.length && j(i.shift()) : b ? h = [] : k.disable())
            },
            k = {
                add: function () {
                    if (h) {
                        var c = h.length;
                        ! function g(b) {
                            n.each(b, function (b, c) {
                                var d = n.type(c);
                                "function" === d ? a.unique && k.has(c) || h.push(c) : c && c.length && "string" !== d && g(c)
                            })
                        }(arguments), d ? f = h.length : b && (e = c, j(b))
                    }
                    return this
                },
                remove: function () {
                    return h && n.each(arguments, function (a, b) {
                        var c;
                        while ((c = n.inArray(b, h, c)) > -1) h.splice(c, 1), d && (f >= c && f--, g >= c && g--)
                    }), this
                },
                has: function (a) {
                    return a ? n.inArray(a, h) > -1 : !(!h || !h.length)
                },
                empty: function () {
                    return h = [], f = 0, this
                },
                disable: function () {
                    return h = i = b = void 0, this
                },
                disabled: function () {
                    return !h
                },
                lock: function () {
                    return i = void 0, b || k.disable(), this
                },
                locked: function () {
                    return !i
                },
                fireWith: function (a, b) {
                    return !h || c && !i || (b = b || [], b = [a, b.slice ? b.slice() : b], d ? i.push(b) : j(b)), this
                },
                fire: function () {
                    return k.fireWith(this, arguments), this
                },
                fired: function () {
                    return !!c
                }
            };
        return k
    }, n.extend({
        Deferred: function (a) {
            var b = [
                    ["resolve", "done", n.Callbacks("once memory"), "resolved"],
                    ["reject", "fail", n.Callbacks("once memory"), "rejected"],
                    ["notify", "progress", n.Callbacks("memory")]
                ],
                c = "pending",
                d = {
                    state: function () {
                        return c
                    },
                    always: function () {
                        return e.done(arguments).fail(arguments), this
                    },
                    then: function () {
                        var a = arguments;
                        return n.Deferred(function (c) {
                            n.each(b, function (b, f) {
                                var g = n.isFunction(a[b]) && a[b];
                                e[f[1]](function () {
                                    var a = g && g.apply(this, arguments);
                                    a && n.isFunction(a.promise) ? a.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[f[0] + "With"](this === d ? c.promise() : this, g ? [a] : arguments)
                                })
                            }), a = null
                        }).promise()
                    },
                    promise: function (a) {
                        return null != a ? n.extend(a, d) : d
                    }
                },
                e = {};
            return d.pipe = d.then, n.each(b, function (a, f) {
                var g = f[2],
                    h = f[3];
                d[f[1]] = g.add, h && g.add(function () {
                    c = h
                }, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function () {
                    return e[f[0] + "With"](this === e ? d : this, arguments), this
                }, e[f[0] + "With"] = g.fireWith
            }), d.promise(e), a && a.call(e, e), e
        },
        when: function (a) {
            var b = 0,
                c = d.call(arguments),
                e = c.length,
                f = 1 !== e || a && n.isFunction(a.promise) ? e : 0,
                g = 1 === f ? a : n.Deferred(),
                h = function (a, b, c) {
                    return function (e) {
                        b[a] = this, c[a] = arguments.length > 1 ? d.call(arguments) : e, c === i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c)
                    }
                },
                i, j, k;
            if (e > 1)
                for (i = new Array(e), j = new Array(e), k = new Array(e); e > b; b++) c[b] && n.isFunction(c[b].promise) ? c[b].promise().done(h(b, k, c)).fail(g.reject).progress(h(b, j, i)) : --f;
            return f || g.resolveWith(k, c), g.promise()
        }
    });
    var H;
    n.fn.ready = function (a) {
        return n.ready.promise().done(a), this
    }, n.extend({
        isReady: !1,
        readyWait: 1,
        holdReady: function (a) {
            a ? n.readyWait++ : n.ready(!0)
        },
        ready: function (a) {
            (a === !0 ? --n.readyWait : n.isReady) || (n.isReady = !0, a !== !0 && --n.readyWait > 0 || (H.resolveWith(l, [n]), n.fn.triggerHandler && (n(l).triggerHandler("ready"), n(l).off("ready"))))
        }
    });

    function I() {
        l.removeEventListener("DOMContentLoaded", I, !1), a.removeEventListener("load", I, !1), n.ready()
    }
    n.ready.promise = function (b) {
        return H || (H = n.Deferred(), "complete" === l.readyState ? setTimeout(n.ready) : (l.addEventListener("DOMContentLoaded", I, !1), a.addEventListener("load", I, !1))), H.promise(b)
    }, n.ready.promise();
    var J = n.access = function (a, b, c, d, e, f, g) {
        var h = 0,
            i = a.length,
            j = null == c;
        if ("object" === n.type(c)) {
            e = !0;
            for (h in c) n.access(a, b, h, c[h], !0, f, g)
        } else if (void 0 !== d && (e = !0, n.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function (a, b, c) {
                return j.call(n(a), c)
            })), b))
            for (; i > h; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
        return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
    };
    n.acceptData = function (a) {
        return 1 === a.nodeType || 9 === a.nodeType || !+a.nodeType
    };

    function K() {
        Object.defineProperty(this.cache = {}, 0, {
            get: function () {
                return {}
            }
        }), this.expando = n.expando + Math.random()
    }
    K.uid = 1, K.accepts = n.acceptData, K.prototype = {
        key: function (a) {
            if (!K.accepts(a)) return 0;
            var b = {},
                c = a[this.expando];
            if (!c) {
                c = K.uid++;
                try {
                    b[this.expando] = {
                        value: c
                    }, Object.defineProperties(a, b)
                } catch (d) {
                    b[this.expando] = c, n.extend(a, b)
                }
            }
            return this.cache[c] || (this.cache[c] = {}), c
        },
        set: function (a, b, c) {
            var d, e = this.key(a),
                f = this.cache[e];
            if ("string" == typeof b) f[b] = c;
            else if (n.isEmptyObject(f)) n.extend(this.cache[e], b);
            else
                for (d in b) f[d] = b[d];
            return f
        },
        get: function (a, b) {
            var c = this.cache[this.key(a)];
            return void 0 === b ? c : c[b]
        },
        access: function (a, b, c) {
            var d;
            return void 0 === b || b && "string" == typeof b && void 0 === c ? (d = this.get(a, b), void 0 !== d ? d : this.get(a, n.camelCase(b))) : (this.set(a, b, c), void 0 !== c ? c : b)
        },
        remove: function (a, b) {
            var c, d, e, f = this.key(a),
                g = this.cache[f];
            if (void 0 === b) this.cache[f] = {};
            else {
                n.isArray(b) ? d = b.concat(b.map(n.camelCase)) : (e = n.camelCase(b), b in g ? d = [b, e] : (d = e, d = d in g ? [d] : d.match(E) || [])), c = d.length;
                while (c--) delete g[d[c]]
            }
        },
        hasData: function (a) {
            return !n.isEmptyObject(this.cache[a[this.expando]] || {})
        },
        discard: function (a) {
            a[this.expando] && delete this.cache[a[this.expando]]
        }
    };
    var L = new K,
        M = new K,
        N = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        O = /([A-Z])/g;

    function P(a, b, c) {
        var d;
        if (void 0 === c && 1 === a.nodeType)
            if (d = "data-" + b.replace(O, "-$1").toLowerCase(), c = a.getAttribute(d), "string" == typeof c) {
                try {
                    c = "true" === c ? !0 : "false" === c ? !1 : "null" === c ? null : +c + "" === c ? +c : N.test(c) ? n.parseJSON(c) : c
                } catch (e) {}
                M.set(a, b, c)
            } else c = void 0;
        return c
    }
    n.extend({
        hasData: function (a) {
            return M.hasData(a) || L.hasData(a)
        },
        data: function (a, b, c) {
            return M.access(a, b, c)
        },
        removeData: function (a, b) {
            M.remove(a, b)
        },
        _data: function (a, b, c) {
            return L.access(a, b, c)
        },
        _removeData: function (a, b) {
            L.remove(a, b)
        }
    }), n.fn.extend({
        data: function (a, b) {
            var c, d, e, f = this[0],
                g = f && f.attributes;
            if (void 0 === a) {
                if (this.length && (e = M.get(f), 1 === f.nodeType && !L.get(f, "hasDataAttrs"))) {
                    c = g.length;
                    while (c--) g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = n.camelCase(d.slice(5)), P(f, d, e[d])));
                    L.set(f, "hasDataAttrs", !0)
                }
                return e
            }
            return "object" == typeof a ? this.each(function () {
                M.set(this, a)
            }) : J(this, function (b) {
                var c, d = n.camelCase(a);
                if (f && void 0 === b) {
                    if (c = M.get(f, a), void 0 !== c) return c;
                    if (c = M.get(f, d), void 0 !== c) return c;
                    if (c = P(f, d, void 0), void 0 !== c) return c
                } else this.each(function () {
                    var c = M.get(this, d);
                    M.set(this, d, b), -1 !== a.indexOf("-") && void 0 !== c && M.set(this, a, b)
                })
            }, null, b, arguments.length > 1, null, !0)
        },
        removeData: function (a) {
            return this.each(function () {
                M.remove(this, a)
            })
        }
    }), n.extend({
        queue: function (a, b, c) {
            var d;
            return a ? (b = (b || "fx") + "queue", d = L.get(a, b), c && (!d || n.isArray(c) ? d = L.access(a, b, n.makeArray(c)) : d.push(c)), d || []) : void 0
        },
        dequeue: function (a, b) {
            b = b || "fx";
            var c = n.queue(a, b),
                d = c.length,
                e = c.shift(),
                f = n._queueHooks(a, b),
                g = function () {
                    n.dequeue(a, b)
                };
            "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
        },
        _queueHooks: function (a, b) {
            var c = b + "queueHooks";
            return L.get(a, c) || L.access(a, c, {
                empty: n.Callbacks("once memory").add(function () {
                    L.remove(a, [b + "queue", c])
                })
            })
        }
    }), n.fn.extend({
        queue: function (a, b) {
            var c = 2;
            return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? n.queue(this[0], a) : void 0 === b ? this : this.each(function () {
                var c = n.queue(this, a, b);
                n._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && n.dequeue(this, a)
            })
        },
        dequeue: function (a) {
            return this.each(function () {
                n.dequeue(this, a)
            })
        },
        clearQueue: function (a) {
            return this.queue(a || "fx", [])
        },
        promise: function (a, b) {
            var c, d = 1,
                e = n.Deferred(),
                f = this,
                g = this.length,
                h = function () {
                    --d || e.resolveWith(f, [f])
                };
            "string" != typeof a && (b = a, a = void 0), a = a || "fx";
            while (g--) c = L.get(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h));
            return h(), e.promise(b)
        }
    });
    var Q = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        R = ["Top", "Right", "Bottom", "Left"],
        S = function (a, b) {
            return a = b || a, "none" === n.css(a, "display") || !n.contains(a.ownerDocument, a)
        },
        T = /^(?:checkbox|radio)$/i;
    ! function () {
        var a = l.createDocumentFragment(),
            b = a.appendChild(l.createElement("div")),
            c = l.createElement("input");
        c.setAttribute("type", "radio"), c.setAttribute("checked", "checked"), c.setAttribute("name", "t"), b.appendChild(c), k.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked, b.innerHTML = "<textarea>x</textarea>", k.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue
    }();
    var U = "undefined";
    k.focusinBubbles = "onfocusin" in a;
    var V = /^key/,
        W = /^(?:mouse|pointer|contextmenu)|click/,
        X = /^(?:focusinfocus|focusoutblur)$/,
        Y = /^([^.]*)(?:\.(.+)|)$/;

    function Z() {
        return !0
    }

    function $() {
        return !1
    }

    function _() {
        try {
            return l.activeElement
        } catch (a) {}
    }
    n.event = {
        global: {},
        add: function (a, b, c, d, e) {
            var f, g, h, i, j, k, l, m, o, p, q, r = L.get(a);
            if (r) {
                c.handler && (f = c, c = f.handler, e = f.selector), c.guid || (c.guid = n.guid++), (i = r.events) || (i = r.events = {}), (g = r.handle) || (g = r.handle = function (b) {
                    return typeof n !== U && n.event.triggered !== b.type ? n.event.dispatch.apply(a, arguments) : void 0
                }), b = (b || "").match(E) || [""], j = b.length;
                while (j--) h = Y.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o && (l = n.event.special[o] || {}, o = (e ? l.delegateType : l.bindType) || o, l = n.event.special[o] || {}, k = n.extend({
                    type: o,
                    origType: q,
                    data: d,
                    handler: c,
                    guid: c.guid,
                    selector: e,
                    needsContext: e && n.expr.match.needsContext.test(e),
                    namespace: p.join(".")
                }, f), (m = i[o]) || (m = i[o] = [], m.delegateCount = 0, l.setup && l.setup.call(a, d, p, g) !== !1 || a.addEventListener && a.addEventListener(o, g, !1)), l.add && (l.add.call(a, k), k.handler.guid || (k.handler.guid = c.guid)), e ? m.splice(m.delegateCount++, 0, k) : m.push(k), n.event.global[o] = !0)
            }
        },
        remove: function (a, b, c, d, e) {
            var f, g, h, i, j, k, l, m, o, p, q, r = L.hasData(a) && L.get(a);
            if (r && (i = r.events)) {
                b = (b || "").match(E) || [""], j = b.length;
                while (j--)
                    if (h = Y.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o) {
                        l = n.event.special[o] || {}, o = (d ? l.delegateType : l.bindType) || o, m = i[o] || [], h = h[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), g = f = m.length;
                        while (f--) k = m[f], !e && q !== k.origType || c && c.guid !== k.guid || h && !h.test(k.namespace) || d && d !== k.selector && ("**" !== d || !k.selector) || (m.splice(f, 1), k.selector && m.delegateCount--, l.remove && l.remove.call(a, k));
                        g && !m.length && (l.teardown && l.teardown.call(a, p, r.handle) !== !1 || n.removeEvent(a, o, r.handle), delete i[o])
                    } else
                        for (o in i) n.event.remove(a, o + b[j], c, d, !0);
                n.isEmptyObject(i) && (delete r.handle, L.remove(a, "events"))
            }
        },
        trigger: function (b, c, d, e) {
            var f, g, h, i, k, m, o, p = [d || l],
                q = j.call(b, "type") ? b.type : b,
                r = j.call(b, "namespace") ? b.namespace.split(".") : [];
            if (g = h = d = d || l, 3 !== d.nodeType && 8 !== d.nodeType && !X.test(q + n.event.triggered) && (q.indexOf(".") >= 0 && (r = q.split("."), q = r.shift(), r.sort()), k = q.indexOf(":") < 0 && "on" + q, b = b[n.expando] ? b : new n.Event(q, "object" == typeof b && b), b.isTrigger = e ? 2 : 3, b.namespace = r.join("."), b.namespace_re = b.namespace ? new RegExp("(^|\\.)" + r.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = d), c = null == c ? [b] : n.makeArray(c, [b]), o = n.event.special[q] || {}, e || !o.trigger || o.trigger.apply(d, c) !== !1)) {
                if (!e && !o.noBubble && !n.isWindow(d)) {
                    for (i = o.delegateType || q, X.test(i + q) || (g = g.parentNode); g; g = g.parentNode) p.push(g), h = g;
                    h === (d.ownerDocument || l) && p.push(h.defaultView || h.parentWindow || a)
                }
                f = 0;
                while ((g = p[f++]) && !b.isPropagationStopped()) b.type = f > 1 ? i : o.bindType || q, m = (L.get(g, "events") || {})[b.type] && L.get(g, "handle"), m && m.apply(g, c), m = k && g[k], m && m.apply && n.acceptData(g) && (b.result = m.apply(g, c), b.result === !1 && b.preventDefault());
                return b.type = q, e || b.isDefaultPrevented() || o._default && o._default.apply(p.pop(), c) !== !1 || !n.acceptData(d) || k && n.isFunction(d[q]) && !n.isWindow(d) && (h = d[k], h && (d[k] = null), n.event.triggered = q, d[q](), n.event.triggered = void 0, h && (d[k] = h)), b.result
            }
        },
        dispatch: function (a) {
            a = n.event.fix(a);
            var b, c, e, f, g, h = [],
                i = d.call(arguments),
                j = (L.get(this, "events") || {})[a.type] || [],
                k = n.event.special[a.type] || {};
            if (i[0] = a, a.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, a) !== !1) {
                h = n.event.handlers.call(this, a, j), b = 0;
                while ((f = h[b++]) && !a.isPropagationStopped()) {
                    a.currentTarget = f.elem, c = 0;
                    while ((g = f.handlers[c++]) && !a.isImmediatePropagationStopped())(!a.namespace_re || a.namespace_re.test(g.namespace)) && (a.handleObj = g, a.data = g.data, e = ((n.event.special[g.origType] || {}).handle || g.handler).apply(f.elem, i), void 0 !== e && (a.result = e) === !1 && (a.preventDefault(), a.stopPropagation()))
                }
                return k.postDispatch && k.postDispatch.call(this, a), a.result
            }
        },
        handlers: function (a, b) {
            var c, d, e, f, g = [],
                h = b.delegateCount,
                i = a.target;
            if (h && i.nodeType && (!a.button || "click" !== a.type))
                for (; i !== this; i = i.parentNode || this)
                    if (i.disabled !== !0 || "click" !== a.type) {
                        for (d = [], c = 0; h > c; c++) f = b[c], e = f.selector + " ", void 0 === d[e] && (d[e] = f.needsContext ? n(e, this).index(i) >= 0 : n.find(e, this, null, [i]).length), d[e] && d.push(f);
                        d.length && g.push({
                            elem: i,
                            handlers: d
                        })
                    } return h < b.length && g.push({
                elem: this,
                handlers: b.slice(h)
            }), g
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "),
            filter: function (a, b) {
                return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
            filter: function (a, b) {
                var c, d, e, f = b.button;
                return null == a.pageX && null != b.clientX && (c = a.target.ownerDocument || l, d = c.documentElement, e = c.body, a.pageX = b.clientX + (d && d.scrollLeft || e && e.scrollLeft || 0) - (d && d.clientLeft || e && e.clientLeft || 0), a.pageY = b.clientY + (d && d.scrollTop || e && e.scrollTop || 0) - (d && d.clientTop || e && e.clientTop || 0)), a.which || void 0 === f || (a.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0), a
            }
        },
        fix: function (a) {
            if (a[n.expando]) return a;
            var b, c, d, e = a.type,
                f = a,
                g = this.fixHooks[e];
            g || (this.fixHooks[e] = g = W.test(e) ? this.mouseHooks : V.test(e) ? this.keyHooks : {}), d = g.props ? this.props.concat(g.props) : this.props, a = new n.Event(f), b = d.length;
            while (b--) c = d[b], a[c] = f[c];
            return a.target || (a.target = l), 3 === a.target.nodeType && (a.target = a.target.parentNode), g.filter ? g.filter(a, f) : a
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function () {
                    return this !== _() && this.focus ? (this.focus(), !1) : void 0
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function () {
                    return this === _() && this.blur ? (this.blur(), !1) : void 0
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function () {
                    return "checkbox" === this.type && this.click && n.nodeName(this, "input") ? (this.click(), !1) : void 0
                },
                _default: function (a) {
                    return n.nodeName(a.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function (a) {
                    void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
                }
            }
        },
        simulate: function (a, b, c, d) {
            var e = n.extend(new n.Event, c, {
                type: a,
                isSimulated: !0,
                originalEvent: {}
            });
            d ? n.event.trigger(e, null, b) : n.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault()
        }
    }, n.removeEvent = function (a, b, c) {
        a.removeEventListener && a.removeEventListener(b, c, !1)
    }, n.Event = function (a, b) {
        return this instanceof n.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && a.returnValue === !1 ? Z : $) : this.type = a, b && n.extend(this, b), this.timeStamp = a && a.timeStamp || n.now(), void(this[n.expando] = !0)) : new n.Event(a, b)
    }, n.Event.prototype = {
        isDefaultPrevented: $,
        isPropagationStopped: $,
        isImmediatePropagationStopped: $,
        preventDefault: function () {
            var a = this.originalEvent;
            this.isDefaultPrevented = Z, a && a.preventDefault && a.preventDefault()
        },
        stopPropagation: function () {
            var a = this.originalEvent;
            this.isPropagationStopped = Z, a && a.stopPropagation && a.stopPropagation()
        },
        stopImmediatePropagation: function () {
            var a = this.originalEvent;
            this.isImmediatePropagationStopped = Z, a && a.stopImmediatePropagation && a.stopImmediatePropagation(), this.stopPropagation()
        }
    }, n.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function (a, b) {
        n.event.special[a] = {
            delegateType: b,
            bindType: b,
            handle: function (a) {
                var c, d = this,
                    e = a.relatedTarget,
                    f = a.handleObj;
                return (!e || e !== d && !n.contains(d, e)) && (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
            }
        }
    }), k.focusinBubbles || n.each({
        focus: "focusin",
        blur: "focusout"
    }, function (a, b) {
        var c = function (a) {
            n.event.simulate(b, a.target, n.event.fix(a), !0)
        };
        n.event.special[b] = {
            setup: function () {
                var d = this.ownerDocument || this,
                    e = L.access(d, b);
                e || d.addEventListener(a, c, !0), L.access(d, b, (e || 0) + 1)
            },
            teardown: function () {
                var d = this.ownerDocument || this,
                    e = L.access(d, b) - 1;
                e ? L.access(d, b, e) : (d.removeEventListener(a, c, !0), L.remove(d, b))
            }
        }
    }), n.fn.extend({
        on: function (a, b, c, d, e) {
            var f, g;
            if ("object" == typeof a) {
                "string" != typeof b && (c = c || b, b = void 0);
                for (g in a) this.on(g, b, c, a[g], e);
                return this
            }
            if (null == c && null == d ? (d = b, c = b = void 0) : null == d && ("string" == typeof b ? (d = c, c = void 0) : (d = c, c = b, b = void 0)), d === !1) d = $;
            else if (!d) return this;
            return 1 === e && (f = d, d = function (a) {
                return n().off(a), f.apply(this, arguments)
            }, d.guid = f.guid || (f.guid = n.guid++)), this.each(function () {
                n.event.add(this, a, d, c, b)
            })
        },
        one: function (a, b, c, d) {
            return this.on(a, b, c, d, 1)
        },
        off: function (a, b, c) {
            var d, e;
            if (a && a.preventDefault && a.handleObj) return d = a.handleObj, n(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;
            if ("object" == typeof a) {
                for (e in a) this.off(e, b, a[e]);
                return this
            }
            return (b === !1 || "function" == typeof b) && (c = b, b = void 0), c === !1 && (c = $), this.each(function () {
                n.event.remove(this, a, c, b)
            })
        },
        trigger: function (a, b) {
            return this.each(function () {
                n.event.trigger(a, b, this)
            })
        },
        triggerHandler: function (a, b) {
            var c = this[0];
            return c ? n.event.trigger(a, b, c, !0) : void 0
        }
    });
    var ab = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
        bb = /<([\w:]+)/,
        cb = /<|&#?\w+;/,
        db = /<(?:script|style|link)/i,
        eb = /checked\s*(?:[^=]|=\s*.checked.)/i,
        fb = /^$|\/(?:java|ecma)script/i,
        gb = /^true\/(.*)/,
        hb = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
        ib = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };
    ib.optgroup = ib.option, ib.tbody = ib.tfoot = ib.colgroup = ib.caption = ib.thead, ib.th = ib.td;

    function jb(a, b) {
        return n.nodeName(a, "table") && n.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
    }

    function kb(a) {
        return a.type = (null !== a.getAttribute("type")) + "/" + a.type, a
    }

    function lb(a) {
        var b = gb.exec(a.type);
        return b ? a.type = b[1] : a.removeAttribute("type"), a
    }

    function mb(a, b) {
        for (var c = 0, d = a.length; d > c; c++) L.set(a[c], "globalEval", !b || L.get(b[c], "globalEval"))
    }

    function nb(a, b) {
        var c, d, e, f, g, h, i, j;
        if (1 === b.nodeType) {
            if (L.hasData(a) && (f = L.access(a), g = L.set(b, f), j = f.events)) {
                delete g.handle, g.events = {};
                for (e in j)
                    for (c = 0, d = j[e].length; d > c; c++) n.event.add(b, e, j[e][c])
            }
            M.hasData(a) && (h = M.access(a), i = n.extend({}, h), M.set(b, i))
        }
    }

    function ob(a, b) {
        var c = a.getElementsByTagName ? a.getElementsByTagName(b || "*") : a.querySelectorAll ? a.querySelectorAll(b || "*") : [];
        return void 0 === b || b && n.nodeName(a, b) ? n.merge([a], c) : c
    }

    function pb(a, b) {
        var c = b.nodeName.toLowerCase();
        "input" === c && T.test(a.type) ? b.checked = a.checked : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue)
    }
    n.extend({
        clone: function (a, b, c) {
            var d, e, f, g, h = a.cloneNode(!0),
                i = n.contains(a.ownerDocument, a);
            if (!(k.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || n.isXMLDoc(a)))
                for (g = ob(h), f = ob(a), d = 0, e = f.length; e > d; d++) pb(f[d], g[d]);
            if (b)
                if (c)
                    for (f = f || ob(a), g = g || ob(h), d = 0, e = f.length; e > d; d++) nb(f[d], g[d]);
                else nb(a, h);
            return g = ob(h, "script"), g.length > 0 && mb(g, !i && ob(a, "script")), h
        },
        buildFragment: function (a, b, c, d) {
            for (var e, f, g, h, i, j, k = b.createDocumentFragment(), l = [], m = 0, o = a.length; o > m; m++)
                if (e = a[m], e || 0 === e)
                    if ("object" === n.type(e)) n.merge(l, e.nodeType ? [e] : e);
                    else if (cb.test(e)) {
                f = f || k.appendChild(b.createElement("div")), g = (bb.exec(e) || ["", ""])[1].toLowerCase(), h = ib[g] || ib._default, f.innerHTML = h[1] + e.replace(ab, "<$1></$2>") + h[2], j = h[0];
                while (j--) f = f.lastChild;
                n.merge(l, f.childNodes), f = k.firstChild, f.textContent = ""
            } else l.push(b.createTextNode(e));
            k.textContent = "", m = 0;
            while (e = l[m++])
                if ((!d || -1 === n.inArray(e, d)) && (i = n.contains(e.ownerDocument, e), f = ob(k.appendChild(e), "script"), i && mb(f), c)) {
                    j = 0;
                    while (e = f[j++]) fb.test(e.type || "") && c.push(e)
                } return k
        },
        cleanData: function (a) {
            for (var b, c, d, e, f = n.event.special, g = 0; void 0 !== (c = a[g]); g++) {
                if (n.acceptData(c) && (e = c[L.expando], e && (b = L.cache[e]))) {
                    if (b.events)
                        for (d in b.events) f[d] ? n.event.remove(c, d) : n.removeEvent(c, d, b.handle);
                    L.cache[e] && delete L.cache[e]
                }
                delete M.cache[c[M.expando]]
            }
        }
    }), n.fn.extend({
        text: function (a) {
            return J(this, function (a) {
                return void 0 === a ? n.text(this) : this.empty().each(function () {
                    (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && (this.textContent = a)
                })
            }, null, a, arguments.length)
        },
        append: function () {
            return this.domManip(arguments, function (a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = jb(this, a);
                    b.appendChild(a)
                }
            })
        },
        prepend: function () {
            return this.domManip(arguments, function (a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = jb(this, a);
                    b.insertBefore(a, b.firstChild)
                }
            })
        },
        before: function () {
            return this.domManip(arguments, function (a) {
                this.parentNode && this.parentNode.insertBefore(a, this)
            })
        },
        after: function () {
            return this.domManip(arguments, function (a) {
                this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
            })
        },
        remove: function (a, b) {
            for (var c, d = a ? n.filter(a, this) : this, e = 0; null != (c = d[e]); e++) b || 1 !== c.nodeType || n.cleanData(ob(c)), c.parentNode && (b && n.contains(c.ownerDocument, c) && mb(ob(c, "script")), c.parentNode.removeChild(c));
            return this
        },
        empty: function () {
            for (var a, b = 0; null != (a = this[b]); b++) 1 === a.nodeType && (n.cleanData(ob(a, !1)), a.textContent = "");
            return this
        },
        clone: function (a, b) {
            return a = null == a ? !1 : a, b = null == b ? a : b, this.map(function () {
                return n.clone(this, a, b)
            })
        },
        html: function (a) {
            return J(this, function (a) {
                var b = this[0] || {},
                    c = 0,
                    d = this.length;
                if (void 0 === a && 1 === b.nodeType) return b.innerHTML;
                if ("string" == typeof a && !db.test(a) && !ib[(bb.exec(a) || ["", ""])[1].toLowerCase()]) {
                    a = a.replace(ab, "<$1></$2>");
                    try {
                        for (; d > c; c++) b = this[c] || {}, 1 === b.nodeType && (n.cleanData(ob(b, !1)), b.innerHTML = a);
                        b = 0
                    } catch (e) {}
                }
                b && this.empty().append(a)
            }, null, a, arguments.length)
        },
        replaceWith: function () {
            var a = arguments[0];
            return this.domManip(arguments, function (b) {
                a = this.parentNode, n.cleanData(ob(this)), a && a.replaceChild(b, this)
            }), a && (a.length || a.nodeType) ? this : this.remove()
        },
        detach: function (a) {
            return this.remove(a, !0)
        },
        domManip: function (a, b) {
            a = e.apply([], a);
            var c, d, f, g, h, i, j = 0,
                l = this.length,
                m = this,
                o = l - 1,
                p = a[0],
                q = n.isFunction(p);
            if (q || l > 1 && "string" == typeof p && !k.checkClone && eb.test(p)) return this.each(function (c) {
                var d = m.eq(c);
                q && (a[0] = p.call(this, c, d.html())), d.domManip(a, b)
            });
            if (l && (c = n.buildFragment(a, this[0].ownerDocument, !1, this), d = c.firstChild, 1 === c.childNodes.length && (c = d), d)) {
                for (f = n.map(ob(c, "script"), kb), g = f.length; l > j; j++) h = c, j !== o && (h = n.clone(h, !0, !0), g && n.merge(f, ob(h, "script"))), b.call(this[j], h, j);
                if (g)
                    for (i = f[f.length - 1].ownerDocument, n.map(f, lb), j = 0; g > j; j++) h = f[j], fb.test(h.type || "") && !L.access(h, "globalEval") && n.contains(i, h) && (h.src ? n._evalUrl && n._evalUrl(h.src) : n.globalEval(h.textContent.replace(hb, "")))
            }
            return this
        }
    }), n.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function (a, b) {
        n.fn[a] = function (a) {
            for (var c, d = [], e = n(a), g = e.length - 1, h = 0; g >= h; h++) c = h === g ? this : this.clone(!0), n(e[h])[b](c), f.apply(d, c.get());
            return this.pushStack(d)
        }
    });
    var qb, rb = {};

    function sb(b, c) {
        var d, e = n(c.createElement(b)).appendTo(c.body),
            f = a.getDefaultComputedStyle && (d = a.getDefaultComputedStyle(e[0])) ? d.display : n.css(e[0], "display");
        return e.detach(), f
    }

    function tb(a) {
        var b = l,
            c = rb[a];
        return c || (c = sb(a, b), "none" !== c && c || (qb = (qb || n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement), b = qb[0].contentDocument, b.write(), b.close(), c = sb(a, b), qb.detach()), rb[a] = c), c
    }
    var ub = /^margin/,
        vb = new RegExp("^(" + Q + ")(?!px)[a-z%]+$", "i"),
        wb = function (a) {
            return a.ownerDocument.defaultView.getComputedStyle(a, null)
        };

    function xb(a, b, c) {
        var d, e, f, g, h = a.style;
        return c = c || wb(a), c && (g = c.getPropertyValue(b) || c[b]), c && ("" !== g || n.contains(a.ownerDocument, a) || (g = n.style(a, b)), vb.test(g) && ub.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 !== g ? g + "" : g
    }

    function yb(a, b) {
        return {
            get: function () {
                return a() ? void delete this.get : (this.get = b).apply(this, arguments)
            }
        }
    }! function () {
        var b, c, d = l.documentElement,
            e = l.createElement("div"),
            f = l.createElement("div");
        if (f.style) {
            f.style.backgroundClip = " content-box", f.cloneNode(!0).style.backgroundClip = "", k.clearCloneStyle = " content-box" === f.style.backgroundClip, e.style.cssText = "border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute", e.appendChild(f);

            function g() {
                f.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", f.innerHTML = "", d.appendChild(e);
                var g = a.getComputedStyle(f, null);
                b = "1%" !== g.top, c = "4px" === g.width, d.removeChild(e)
            }
            a.getComputedStyle && n.extend(k, {
                pixelPosition: function () {
                    return g(), b
                },
                boxSizingReliable: function () {
                    return null == c && g(), c
                },
                reliableMarginRight: function () {
                    var b, c = f.appendChild(l.createElement("div"));
                    return c.style.cssText = f.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", c.style.marginRight = c.style.width = "0", f.style.width = "1px", d.appendChild(e), b = !parseFloat(a.getComputedStyle(c, null).marginRight), d.removeChild(e), b
                }
            })
        }
    }(), n.swap = function (a, b, c, d) {
        var e, f, g = {};
        for (f in b) g[f] = a.style[f], a.style[f] = b[f];
        e = c.apply(a, d || []);
        for (f in b) a.style[f] = g[f];
        return e
    };
    var zb = /^(none|table(?!-c[ea]).+)/,
        Ab = new RegExp("^(" + Q + ")(.*)$", "i"),
        Bb = new RegExp("^([+-])=(" + Q + ")", "i"),
        Cb = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        Db = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        Eb = ["Webkit", "O", "Moz", "ms"];

    function Fb(a, b) {
        if (b in a) return b;
        var c = b[0].toUpperCase() + b.slice(1),
            d = b,
            e = Eb.length;
        while (e--)
            if (b = Eb[e] + c, b in a) return b;
        return d
    }

    function Gb(a, b, c) {
        var d = Ab.exec(b);
        return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b
    }

    function Hb(a, b, c, d, e) {
        for (var f = c === (d ? "border" : " content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2) "margin" === c && (g += n.css(a, c + R[f], !0, e)), d ? (" content" === c && (g -= n.css(a, "padding" + R[f], !0, e)), "margin" !== c && (g -= n.css(a, "border" + R[f] + "Width", !0, e))) : (g += n.css(a, "padding" + R[f], !0, e), "padding" !== c && (g += n.css(a, "border" + R[f] + "Width", !0, e)));
        return g
    }

    function Ib(a, b, c) {
        var d = !0,
            e = "width" === b ? a.offsetWidth : a.offsetHeight,
            f = wb(a),
            g = "border-box" === n.css(a, "boxSizing", !1, f);
        if (0 >= e || null == e) {
            if (e = xb(a, b, f), (0 > e || null == e) && (e = a.style[b]), vb.test(e)) return e;
            d = g && (k.boxSizingReliable() || e === a.style[b]), e = parseFloat(e) || 0
        }
        return e + Hb(a, b, c || (g ? "border" : " content"), d, f) + "px"
    }

    function Jb(a, b) {
        for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++) d = a[g], d.style && (f[g] = L.get(d, "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && S(d) && (f[g] = L.access(d, "olddisplay", tb(d.nodeName)))) : (e = S(d), "none" === c && e || L.set(d, "olddisplay", e ? c : n.css(d, "display"))));
        for (g = 0; h > g; g++) d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style.display || (d.style.display = b ? f[g] || "" : "none"));
        return a
    }
    n.extend({
        cssHooks: {
            opacity: {
                get: function (a, b) {
                    if (b) {
                        var c = xb(a, "opacity");
                        return "" === c ? "1" : c
                    }
                }
            }
        },
        cssNumber: {
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            "float": "cssFloat"
        },
        style: function (a, b, c, d) {
            if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                var e, f, g, h = n.camelCase(b),
                    i = a.style;
                return b = n.cssProps[h] || (n.cssProps[h] = Fb(i, h)), g = n.cssHooks[b] || n.cssHooks[h], void 0 === c ? g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b] : (f = typeof c, "string" === f && (e = Bb.exec(c)) && (c = (e[1] + 1) * e[2] + parseFloat(n.css(a, b)), f = "number"), null != c && c === c && ("number" !== f || n.cssNumber[h] || (c += "px"), k.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), g && "set" in g && void 0 === (c = g.set(a, c, d)) || (i[b] = c)), void 0)
            }
        },
        css: function (a, b, c, d) {
            var e, f, g, h = n.camelCase(b);
            return b = n.cssProps[h] || (n.cssProps[h] = Fb(a.style, h)), g = n.cssHooks[b] || n.cssHooks[h], g && "get" in g && (e = g.get(a, !0, c)), void 0 === e && (e = xb(a, b, d)), "normal" === e && b in Db && (e = Db[b]), "" === c || c ? (f = parseFloat(e), c === !0 || n.isNumeric(f) ? f || 0 : e) : e
        }
    }), n.each(["height", "width"], function (a, b) {
        n.cssHooks[b] = {
            get: function (a, c, d) {
                return c ? zb.test(n.css(a, "display")) && 0 === a.offsetWidth ? n.swap(a, Cb, function () {
                    return Ib(a, b, d)
                }) : Ib(a, b, d) : void 0
            },
            set: function (a, c, d) {
                var e = d && wb(a);
                return Gb(a, c, d ? Hb(a, b, d, "border-box" === n.css(a, "boxSizing", !1, e), e) : 0)
            }
        }
    }), n.cssHooks.marginRight = yb(k.reliableMarginRight, function (a, b) {
        return b ? n.swap(a, {
            display: "inline-block"
        }, xb, [a, "marginRight"]) : void 0
    }), n.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function (a, b) {
        n.cssHooks[a + b] = {
            expand: function (c) {
                for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 > d; d++) e[a + R[d] + b] = f[d] || f[d - 2] || f[0];
                return e
            }
        }, ub.test(a) || (n.cssHooks[a + b].set = Gb)
    }), n.fn.extend({
        css: function (a, b) {
            return J(this, function (a, b, c) {
                var d, e, f = {},
                    g = 0;
                if (n.isArray(b)) {
                    for (d = wb(a), e = b.length; e > g; g++) f[b[g]] = n.css(a, b[g], !1, d);
                    return f
                }
                return void 0 !== c ? n.style(a, b, c) : n.css(a, b)
            }, a, b, arguments.length > 1)
        },
        show: function () {
            return Jb(this, !0)
        },
        hide: function () {
            return Jb(this)
        },
        toggle: function (a) {
            return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function () {
                S(this) ? n(this).show() : n(this).hide()
            })
        }
    });

    function Kb(a, b, c, d, e) {
        return new Kb.prototype.init(a, b, c, d, e)
    }
    n.Tween = Kb, Kb.prototype = {
        constructor: Kb,
        init: function (a, b, c, d, e, f) {
            this.elem = a, this.prop = c, this.easing = e || "swing", this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (n.cssNumber[c] ? "" : "px")
        },
        cur: function () {
            var a = Kb.propHooks[this.prop];
            return a && a.get ? a.get(this) : Kb.propHooks._default.get(this)
        },
        run: function (a) {
            var b, c = Kb.propHooks[this.prop];
            return this.pos = b = this.options.duration ? n.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : Kb.propHooks._default.set(this), this
        }
    }, Kb.prototype.init.prototype = Kb.prototype, Kb.propHooks = {
        _default: {
            get: function (a) {
                var b;
                return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (b = n.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0) : a.elem[a.prop]
            },
            set: function (a) {
                n.fx.step[a.prop] ? n.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[n.cssProps[a.prop]] || n.cssHooks[a.prop]) ? n.style(a.elem, a.prop, a.now + a.unit) : a.elem[a.prop] = a.now
            }
        }
    }, Kb.propHooks.scrollTop = Kb.propHooks.scrollLeft = {
        set: function (a) {
            a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
        }
    }, n.easing = {
        linear: function (a) {
            return a
        },
        swing: function (a) {
            return .5 - Math.cos(a * Math.PI) / 2
        }
    }, n.fx = Kb.prototype.init, n.fx.step = {};
    var Lb, Mb, Nb = /^(?:toggle|show|hide)$/,
        Ob = new RegExp("^(?:([+-])=|)(" + Q + ")([a-z%]*)$", "i"),
        Pb = /queueHooks$/,
        Qb = [Vb],
        Rb = {
            "*": [function (a, b) {
                var c = this.createTween(a, b),
                    d = c.cur(),
                    e = Ob.exec(b),
                    f = e && e[3] || (n.cssNumber[a] ? "" : "px"),
                    g = (n.cssNumber[a] || "px" !== f && +d) && Ob.exec(n.css(c.elem, a)),
                    h = 1,
                    i = 20;
                if (g && g[3] !== f) {
                    f = f || g[3], e = e || [], g = +d || 1;
                    do h = h || ".5", g /= h, n.style(c.elem, a, g + f); while (h !== (h = c.cur() / d) && 1 !== h && --i)
                }
                return e && (g = c.start = +g || +d || 0, c.unit = f, c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2]), c
            }]
        };

    function Sb() {
        return setTimeout(function () {
            Lb = void 0
        }), Lb = n.now()
    }

    function Tb(a, b) {
        var c, d = 0,
            e = {
                height: a
            };
        for (b = b ? 1 : 0; 4 > d; d += 2 - b) c = R[d], e["margin" + c] = e["padding" + c] = a;
        return b && (e.opacity = e.width = a), e
    }

    function Ub(a, b, c) {
        for (var d, e = (Rb[b] || []).concat(Rb["*"]), f = 0, g = e.length; g > f; f++)
            if (d = e[f].call(c, b, a)) return d
    }

    function Vb(a, b, c) {
        var d, e, f, g, h, i, j, k, l = this,
            m = {},
            o = a.style,
            p = a.nodeType && S(a),
            q = L.get(a, "fxshow");
        c.queue || (h = n._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty.fire = function () {
            h.unqueued || i()
        }), h.unqueued++, l.always(function () {
            l.always(function () {
                h.unqueued--, n.queue(a, "fx").length || h.empty.fire()
            })
        })), 1 === a.nodeType && ("height" in b || "width" in b) && (c.overflow = [o.overflow, o.overflowX, o.overflowY], j = n.css(a, "display"), k = "none" === j ? L.get(a, "olddisplay") || tb(a.nodeName) : j, "inline" === k && "none" === n.css(a, "float") && (o.display = "inline-block")), c.overflow && (o.overflow = "hidden", l.always(function () {
            o.overflow = c.overflow[0], o.overflowX = c.overflow[1], o.overflowY = c.overflow[2]
        }));
        for (d in b)
            if (e = b[d], Nb.exec(e)) {
                if (delete b[d], f = f || "toggle" === e, e === (p ? "hide" : "show")) {
                    if ("show" !== e || !q || void 0 === q[d]) continue;
                    p = !0
                }
                m[d] = q && q[d] || n.style(a, d)
            } else j = void 0;
        if (n.isEmptyObject(m)) "inline" === ("none" === j ? tb(a.nodeName) : j) && (o.display = j);
        else {
            q ? "hidden" in q && (p = q.hidden) : q = L.access(a, "fxshow", {}), f && (q.hidden = !p), p ? n(a).show() : l.done(function () {
                n(a).hide()
            }), l.done(function () {
                var b;
                L.remove(a, "fxshow");
                for (b in m) n.style(a, b, m[b])
            });
            for (d in m) g = Ub(p ? q[d] : 0, d, l), d in q || (q[d] = g.start, p && (g.end = g.start, g.start = "width" === d || "height" === d ? 1 : 0))
        }
    }

    function Wb(a, b) {
        var c, d, e, f, g;
        for (c in a)
            if (d = n.camelCase(c), e = b[d], f = a[c], n.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = n.cssHooks[d], g && "expand" in g) {
                f = g.expand(f), delete a[d];
                for (c in f) c in a || (a[c] = f[c], b[c] = e)
            } else b[d] = e
    }

    function Xb(a, b, c) {
        var d, e, f = 0,
            g = Qb.length,
            h = n.Deferred().always(function () {
                delete i.elem
            }),
            i = function () {
                if (e) return !1;
                for (var b = Lb || Sb(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; i > g; g++) j.tweens[g].run(f);
                return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1)
            },
            j = h.promise({
                elem: a,
                props: n.extend({}, b),
                opts: n.extend(!0, {
                    specialEasing: {}
                }, c),
                originalProperties: b,
                originalOptions: c,
                startTime: Lb || Sb(),
                duration: c.duration,
                tweens: [],
                createTween: function (b, c) {
                    var d = n.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                    return j.tweens.push(d), d
                },
                stop: function (b) {
                    var c = 0,
                        d = b ? j.tweens.length : 0;
                    if (e) return this;
                    for (e = !0; d > c; c++) j.tweens[c].run(1);
                    return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this
                }
            }),
            k = j.props;
        for (Wb(k, j.opts.specialEasing); g > f; f++)
            if (d = Qb[f].call(j, a, k, j.opts)) return d;
        return n.map(k, Ub, j), n.isFunction(j.opts.start) && j.opts.start.call(a, j), n.fx.timer(n.extend(i, {
            elem: a,
            anim: j,
            queue: j.opts.queue
        })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
    }
    n.Animation = n.extend(Xb, {
            tweener: function (a, b) {
                n.isFunction(a) ? (b = a, a = ["*"]) : a = a.split(" ");
                for (var c, d = 0, e = a.length; e > d; d++) c = a[d], Rb[c] = Rb[c] || [], Rb[c].unshift(b)
            },
            prefilter: function (a, b) {
                b ? Qb.unshift(a) : Qb.push(a)
            }
        }), n.speed = function (a, b, c) {
            var d = a && "object" == typeof a ? n.extend({}, a) : {
                complete: c || !c && b || n.isFunction(a) && a,
                duration: a,
                easing: c && b || b && !n.isFunction(b) && b
            };
            return d.duration = n.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in n.fx.speeds ? n.fx.speeds[d.duration] : n.fx.speeds._default, (null == d.queue || d.queue === !0) && (d.queue = "fx"), d.old = d.complete, d.complete = function () {
                n.isFunction(d.old) && d.old.call(this), d.queue && n.dequeue(this, d.queue)
            }, d
        }, n.fn.extend({
            fadeTo: function (a, b, c, d) {
                return this.filter(S).css("opacity", 0).show().end().animate({
                    opacity: b
                }, a, c, d)
            },
            animate: function (a, b, c, d) {
                var e = n.isEmptyObject(a),
                    f = n.speed(b, c, d),
                    g = function () {
                        var b = Xb(this, n.extend({}, a), f);
                        (e || L.get(this, "finish")) && b.stop(!0)
                    };
                return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
            },
            stop: function (a, b, c) {
                var d = function (a) {
                    var b = a.stop;
                    delete a.stop, b(c)
                };
                return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(a || "fx", []), this.each(function () {
                    var b = !0,
                        e = null != a && a + "queueHooks",
                        f = n.timers,
                        g = L.get(this);
                    if (e) g[e] && g[e].stop && d(g[e]);
                    else
                        for (e in g) g[e] && g[e].stop && Pb.test(e) && d(g[e]);
                    for (e = f.length; e--;) f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
                    (b || !c) && n.dequeue(this, a)
                })
            },
            finish: function (a) {
                return a !== !1 && (a = a || "fx"), this.each(function () {
                    var b, c = L.get(this),
                        d = c[a + "queue"],
                        e = c[a + "queueHooks"],
                        f = n.timers,
                        g = d ? d.length : 0;
                    for (c.finish = !0, n.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;) f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
                    for (b = 0; g > b; b++) d[b] && d[b].finish && d[b].finish.call(this);
                    delete c.finish
                })
            }
        }), n.each(["toggle", "show", "hide"], function (a, b) {
            var c = n.fn[b];
            n.fn[b] = function (a, d, e) {
                return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(Tb(b, !0), a, d, e)
            }
        }), n.each({
            slideDown: Tb("show"),
            slideUp: Tb("hide"),
            slideToggle: Tb("toggle"),
            fadeIn: {
                opacity: "show"
            },
            fadeOut: {
                opacity: "hide"
            },
            fadeToggle: {
                opacity: "toggle"
            }
        }, function (a, b) {
            n.fn[a] = function (a, c, d) {
                return this.animate(b, a, c, d)
            }
        }), n.timers = [], n.fx.tick = function () {
            var a, b = 0,
                c = n.timers;
            for (Lb = n.now(); b < c.length; b++) a = c[b], a() || c[b] !== a || c.splice(b--, 1);
            c.length || n.fx.stop(), Lb = void 0
        }, n.fx.timer = function (a) {
            n.timers.push(a), a() ? n.fx.start() : n.timers.pop()
        }, n.fx.interval = 13, n.fx.start = function () {
            Mb || (Mb = setInterval(n.fx.tick, n.fx.interval))
        }, n.fx.stop = function () {
            clearInterval(Mb), Mb = null
        }, n.fx.speeds = {
            slow: 600,
            fast: 200,
            _default: 400
        }, n.fn.delay = function (a, b) {
            return a = n.fx ? n.fx.speeds[a] || a : a, b = b || "fx", this.queue(b, function (b, c) {
                var d = setTimeout(b, a);
                c.stop = function () {
                    clearTimeout(d)
                }
            })
        },
        function () {
            var a = l.createElement("input"),
                b = l.createElement("select"),
                c = b.appendChild(l.createElement("option"));
            a.type = "checkbox", k.checkOn = "" !== a.value, k.optSelected = c.selected, b.disabled = !0, k.optDisabled = !c.disabled, a = l.createElement("input"), a.value = "t", a.type = "radio", k.radioValue = "t" === a.value
        }();
    var Yb, Zb, $b = n.expr.attrHandle;
    n.fn.extend({
        attr: function (a, b) {
            return J(this, n.attr, a, b, arguments.length > 1)
        },
        removeAttr: function (a) {
            return this.each(function () {
                n.removeAttr(this, a)
            })
        }
    }), n.extend({
        attr: function (a, b, c) {
            var d, e, f = a.nodeType;
            if (a && 3 !== f && 8 !== f && 2 !== f) return typeof a.getAttribute === U ? n.prop(a, b, c) : (1 === f && n.isXMLDoc(a) || (b = b.toLowerCase(), d = n.attrHooks[b] || (n.expr.match.bool.test(b) ? Zb : Yb)), void 0 === c ? d && "get" in d && null !== (e = d.get(a, b)) ? e : (e = n.find.attr(a, b), null == e ? void 0 : e) : null !== c ? d && "set" in d && void 0 !== (e = d.set(a, c, b)) ? e : (a.setAttribute(b, c + ""), c) : void n.removeAttr(a, b))
        },
        removeAttr: function (a, b) {
            var c, d, e = 0,
                f = b && b.match(E);
            if (f && 1 === a.nodeType)
                while (c = f[e++]) d = n.propFix[c] || c, n.expr.match.bool.test(c) && (a[d] = !1), a.removeAttribute(c)
        },
        attrHooks: {
            type: {
                set: function (a, b) {
                    if (!k.radioValue && "radio" === b && n.nodeName(a, "input")) {
                        var c = a.value;
                        return a.setAttribute("type", b), c && (a.value = c), b
                    }
                }
            }
        }
    }), Zb = {
        set: function (a, b, c) {
            return b === !1 ? n.removeAttr(a, c) : a.setAttribute(c, c), c
        }
    }, n.each(n.expr.match.bool.source.match(/\w+/g), function (a, b) {
        var c = $b[b] || n.find.attr;
        $b[b] = function (a, b, d) {
            var e, f;
            return d || (f = $b[b], $b[b] = e, e = null != c(a, b, d) ? b.toLowerCase() : null, $b[b] = f), e
        }
    });
    var _b = /^(?:input|select|textarea|button)$/i;
    n.fn.extend({
        prop: function (a, b) {
            return J(this, n.prop, a, b, arguments.length > 1)
        },
        removeProp: function (a) {
            return this.each(function () {
                delete this[n.propFix[a] || a]
            })
        }
    }), n.extend({
        propFix: {
            "for": "htmlFor",
            "class": "className"
        },
        prop: function (a, b, c) {
            var d, e, f, g = a.nodeType;
            if (a && 3 !== g && 8 !== g && 2 !== g) return f = 1 !== g || !n.isXMLDoc(a), f && (b = n.propFix[b] || b, e = n.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
        },
        propHooks: {
            tabIndex: {
                get: function (a) {
                    return a.hasAttribute("tabindex") || _b.test(a.nodeName) || a.href ? a.tabIndex : -1
                }
            }
        }
    }), k.optSelected || (n.propHooks.selected = {
        get: function (a) {
            var b = a.parentNode;
            return b && b.parentNode && b.parentNode.selectedIndex, null
        }
    }), n.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", " contentEditable"], function () {
        n.propFix[this.toLowerCase()] = this
    });
    var ac = /[\t\r\n\f]/g;
    n.fn.extend({
        addClass: function (a) {
            var b, c, d, e, f, g, h = "string" == typeof a && a,
                i = 0,
                j = this.length;
            if (n.isFunction(a)) return this.each(function (b) {
                n(this).addClass(a.call(this, b, this.className))
            });
            if (h)
                for (b = (a || "").match(E) || []; j > i; i++)
                    if (c = this[i], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ac, " ") : " ")) {
                        f = 0;
                        while (e = b[f++]) d.indexOf(" " + e + " ") < 0 && (d += e + " ");
                        g = n.trim(d), c.className !== g && (c.className = g)
                    } return this
        },
        removeClass: function (a) {
            var b, c, d, e, f, g, h = 0 === arguments.length || "string" == typeof a && a,
                i = 0,
                j = this.length;
            if (n.isFunction(a)) return this.each(function (b) {
                n(this).removeClass(a.call(this, b, this.className))
            });
            if (h)
                for (b = (a || "").match(E) || []; j > i; i++)
                    if (c = this[i], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ac, " ") : "")) {
                        f = 0;
                        while (e = b[f++])
                            while (d.indexOf(" " + e + " ") >= 0) d = d.replace(" " + e + " ", " ");
                        g = a ? n.trim(d) : "", c.className !== g && (c.className = g)
                    } return this
        },
        toggleClass: function (a, b) {
            var c = typeof a;
            return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : this.each(n.isFunction(a) ? function (c) {
                n(this).toggleClass(a.call(this, c, this.className, b), b)
            } : function () {
                if ("string" === c) {
                    var b, d = 0,
                        e = n(this),
                        f = a.match(E) || [];
                    while (b = f[d++]) e.hasClass(b) ? e.removeClass(b) : e.addClass(b)
                } else(c === U || "boolean" === c) && (this.className && L.set(this, "__className__", this.className), this.className = this.className || a === !1 ? "" : L.get(this, "__className__") || "")
            })
        },
        hasClass: function (a) {
            for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++)
                if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(ac, " ").indexOf(b) >= 0) return !0;
            return !1
        }
    });
    var bc = /\r/g;
    n.fn.extend({
        val: function (a) {
            var b, c, d, e = this[0]; {
                if (arguments.length) return d = n.isFunction(a), this.each(function (c) {
                    var e;
                    1 === this.nodeType && (e = d ? a.call(this, c, n(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : n.isArray(e) && (e = n.map(e, function (a) {
                        return null == a ? "" : a + ""
                    })), b = n.valHooks[this.type] || n.valHooks[this.nodeName.toLowerCase()], b && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e))
                });
                if (e) return b = n.valHooks[e.type] || n.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(bc, "") : null == c ? "" : c)
            }
        }
    }), n.extend({
        valHooks: {
            option: {
                get: function (a) {
                    var b = n.find.attr(a, "value");
                    return null != b ? b : n.trim(n.text(a))
                }
            },
            select: {
                get: function (a) {
                    for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ? h : f ? e : 0; h > i; i++)
                        if (c = d[i], !(!c.selected && i !== e || (k.optDisabled ? c.disabled : null !== c.getAttribute("disabled")) || c.parentNode.disabled && n.nodeName(c.parentNode, "optgroup"))) {
                            if (b = n(c).val(), f) return b;
                            g.push(b)
                        } return g
                },
                set: function (a, b) {
                    var c, d, e = a.options,
                        f = n.makeArray(b),
                        g = e.length;
                    while (g--) d = e[g], (d.selected = n.inArray(d.value, f) >= 0) && (c = !0);
                    return c || (a.selectedIndex = -1), f
                }
            }
        }
    }), n.each(["radio", "checkbox"], function () {
        n.valHooks[this] = {
            set: function (a, b) {
                return n.isArray(b) ? a.checked = n.inArray(n(a).val(), b) >= 0 : void 0
            }
        }, k.checkOn || (n.valHooks[this].get = function (a) {
            return null === a.getAttribute("value") ? "on" : a.value
        })
    }), n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (a, b) {
        n.fn[b] = function (a, c) {
            return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
        }
    }), n.fn.extend({
        hover: function (a, b) {
            return this.mouseenter(a).mouseleave(b || a)
        },
        bind: function (a, b, c) {
            return this.on(a, null, b, c)
        },
        unbind: function (a, b) {
            return this.off(a, null, b)
        },
        delegate: function (a, b, c, d) {
            return this.on(b, a, c, d)
        },
        undelegate: function (a, b, c) {
            return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
        }
    });
    var cc = n.now(),
        dc = /\?/;
    n.parseJSON = function (a) {
        return JSON.parse(a + "")
    }, n.parseXML = function (a) {
        var b, c;
        if (!a || "string" != typeof a) return null;
        try {
            c = new DOMParser, b = c.parseFromString(a, "text/xml")
        } catch (d) {
            b = void 0
        }
        return (!b || b.getElementsByTagName("parsererror").length) && n.error("Invalid XML: " + a), b
    };
    var ec, fc, gc = /#.*$/,
        hc = /([?&])_=[^&]*/,
        ic = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        jc = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        kc = /^(?:GET|HEAD)$/,
        lc = /^\/\//,
        mc = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
        nc = {},
        oc = {},
        pc = "*/".concat("*");
    try {
        fc = location.href
    } catch (qc) {
        fc = l.createElement("a"), fc.href = "", fc = fc.href
    }
    ec = mc.exec(fc.toLowerCase()) || [];

    function rc(a) {
        return function (b, c) {
            "string" != typeof b && (c = b, b = "*");
            var d, e = 0,
                f = b.toLowerCase().match(E) || [];
            if (n.isFunction(c))
                while (d = f[e++]) "+" === d[0] ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
        }
    }

    function sc(a, b, c, d) {
        var e = {},
            f = a === oc;

        function g(h) {
            var i;
            return e[h] = !0, n.each(a[h] || [], function (a, h) {
                var j = h(b, c, d);
                return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1)
            }), i
        }
        return g(b.dataTypes[0]) || !e["*"] && g("*")
    }

    function tc(a, b) {
        var c, d, e = n.ajaxSettings.flatOptions || {};
        for (c in b) void 0 !== b[c] && ((e[c] ? a : d || (d = {}))[c] = b[c]);
        return d && n.extend(!0, a, d), a
    }

    function uc(a, b, c) {
        var d, e, f, g, h = a.contents,
            i = a.dataTypes;
        while ("*" === i[0]) i.shift(), void 0 === d && (d = a.mimeType || b.getResponseHeader("Content-Type"));
        if (d)
            for (e in h)
                if (h[e] && h[e].test(d)) {
                    i.unshift(e);
                    break
                } if (i[0] in c) f = i[0];
        else {
            for (e in c) {
                if (!i[0] || a.converters[e + " " + i[0]]) {
                    f = e;
                    break
                }
                g || (g = e)
            }
            f = f || g
        }
        return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0
    }

    function vc(a, b, c, d) {
        var e, f, g, h, i, j = {},
            k = a.dataTypes.slice();
        if (k[1])
            for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
        f = k.shift();
        while (f)
            if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift())
                if ("*" === f) f = i;
                else if ("*" !== i && i !== f) {
            if (g = j[i + " " + f] || j["* " + f], !g)
                for (e in j)
                    if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                        g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                        break
                    } if (g !== !0)
                if (g && a["throws"]) b = g(b);
                else try {
                    b = g(b)
                } catch (l) {
                    return {
                        state: "parsererror",
                        error: g ? l : "No conversion from " + i + " to " + f
                    }
                }
        }
        return {
            state: "success",
            data: b
        }
    }
    n.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: fc,
            type: "GET",
            isLocal: jc.test(ec[1]),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": pc,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /xml/,
                html: /html/,
                json: /json/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": n.parseJSON,
                "text xml": n.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function (a, b) {
            return b ? tc(tc(a, n.ajaxSettings), b) : tc(n.ajaxSettings, a)
        },
        ajaxPrefilter: rc(nc),
        ajaxTransport: rc(oc),
        ajax: function (a, b) {
            "object" == typeof a && (b = a, a = void 0), b = b || {};
            var c, d, e, f, g, h, i, j, k = n.ajaxSetup({}, b),
                l = k.context || k,
                m = k.context && (l.nodeType || l.jquery) ? n(l) : n.event,
                o = n.Deferred(),
                p = n.Callbacks("once memory"),
                q = k.statusCode || {},
                r = {},
                s = {},
                t = 0,
                u = "canceled",
                v = {
                    readyState: 0,
                    getResponseHeader: function (a) {
                        var b;
                        if (2 === t) {
                            if (!f) {
                                f = {};
                                while (b = ic.exec(e)) f[b[1].toLowerCase()] = b[2]
                            }
                            b = f[a.toLowerCase()]
                        }
                        return null == b ? null : b
                    },
                    getAllResponseHeaders: function () {
                        return 2 === t ? e : null
                    },
                    setRequestHeader: function (a, b) {
                        var c = a.toLowerCase();
                        return t || (a = s[c] = s[c] || a, r[a] = b), this
                    },
                    overrideMimeType: function (a) {
                        return t || (k.mimeType = a), this
                    },
                    statusCode: function (a) {
                        var b;
                        if (a)
                            if (2 > t)
                                for (b in a) q[b] = [q[b], a[b]];
                            else v.always(a[v.status]);
                        return this
                    },
                    abort: function (a) {
                        var b = a || u;
                        return c && c.abort(b), x(0, b), this
                    }
                };
            if (o.promise(v).complete = p.add, v.success = v.done, v.error = v.fail, k.url = ((a || k.url || fc) + "").replace(gc, "").replace(lc, ec[1] + "//"), k.type = b.method || b.type || k.method || k.type, k.dataTypes = n.trim(k.dataType || "*").toLowerCase().match(E) || [""], null == k.crossDomain && (h = mc.exec(k.url.toLowerCase()), k.crossDomain = !(!h || h[1] === ec[1] && h[2] === ec[2] && (h[3] || ("http:" === h[1] ? "80" : "443")) === (ec[3] || ("http:" === ec[1] ? "80" : "443")))), k.data && k.processData && "string" != typeof k.data && (k.data = n.param(k.data, k.traditional)), sc(nc, k, b, v), 2 === t) return v;
            i = k.global, i && 0 === n.active++ && n.event.trigger("ajaxStart"), k.type = k.type.toUpperCase(), k.hasContent = !kc.test(k.type), d = k.url, k.hasContent || (k.data && (d = k.url += (dc.test(d) ? "&" : "?") + k.data, delete k.data), k.cache === !1 && (k.url = hc.test(d) ? d.replace(hc, "$1_=" + cc++) : d + (dc.test(d) ? "&" : "?") + "_=" + cc++)), k.ifModified && (n.lastModified[d] && v.setRequestHeader("If-Modified-Since", n.lastModified[d]), n.etag[d] && v.setRequestHeader("If-None-Match", n.etag[d])), (k.data && k.hasContent && k.contentType !== !1 || b.contentType) && v.setRequestHeader("Content-Type", k.contentType), v.setRequestHeader("Accept", k.dataTypes[0] && k.accepts[k.dataTypes[0]] ? k.accepts[k.dataTypes[0]] + ("*" !== k.dataTypes[0] ? ", " + pc + "; q=0.01" : "") : k.accepts["*"]);
            for (j in k.headers) v.setRequestHeader(j, k.headers[j]);
            if (k.beforeSend && (k.beforeSend.call(l, v, k) === !1 || 2 === t)) return v.abort();
            u = "abort";
            for (j in {
                    success: 1,
                    error: 1,
                    complete: 1
                }) v[j](k[j]);
            if (c = sc(oc, k, b, v)) {
                v.readyState = 1, i && m.trigger("ajaxSend", [v, k]), k.async && k.timeout > 0 && (g = setTimeout(function () {
                    v.abort("timeout")
                }, k.timeout));
                try {
                    t = 1, c.send(r, x)
                } catch (w) {
                    if (!(2 > t)) throw w;
                    x(-1, w)
                }
            } else x(-1, "No Transport");

            function x(a, b, f, h) {
                var j, r, s, u, w, x = b;
                2 !== t && (t = 2, g && clearTimeout(g), c = void 0, e = h || "", v.readyState = a > 0 ? 4 : 0, j = a >= 200 && 300 > a || 304 === a, f && (u = uc(k, v, f)), u = vc(k, u, v, j), j ? (k.ifModified && (w = v.getResponseHeader("Last-Modified"), w && (n.lastModified[d] = w), w = v.getResponseHeader("etag"), w && (n.etag[d] = w)), 204 === a || "HEAD" === k.type ? x = "nocontent" : 304 === a ? x = "notmodified" : (x = u.state, r = u.data, s = u.error, j = !s)) : (s = x, (a || !x) && (x = "error", 0 > a && (a = 0))), v.status = a, v.statusText = (b || x) + "", j ? o.resolveWith(l, [r, x, v]) : o.rejectWith(l, [v, x, s]), v.statusCode(q), q = void 0, i && m.trigger(j ? "ajaxSuccess" : "ajaxError", [v, k, j ? r : s]), p.fireWith(l, [v, x]), i && (m.trigger("ajaxComplete", [v, k]), --n.active || n.event.trigger("ajaxStop")))
            }
            return v
        },
        getJSON: function (a, b, c) {
            return n.get(a, b, c, "json")
        },
        getScript: function (a, b) {
            return n.get(a, void 0, b, "script")
        }
    }), n.each(["get", "post"], function (a, b) {
        n[b] = function (a, c, d, e) {
            return n.isFunction(c) && (e = e || d, d = c, c = void 0), n.ajax({
                url: a,
                type: b,
                dataType: e,
                data: c,
                success: d
            })
        }
    }), n.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (a, b) {
        n.fn[b] = function (a) {
            return this.on(b, a)
        }
    }), n._evalUrl = function (a) {
        return n.ajax({
            url: a,
            type: "GET",
            dataType: "script",
            async: !1,
            global: !1,
            "throws": !0
        })
    }, n.fn.extend({
        wrapAll: function (a) {
            var b;
            return n.isFunction(a) ? this.each(function (b) {
                n(this).wrapAll(a.call(this, b))
            }) : (this[0] && (b = n(a, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && b.insertBefore(this[0]), b.map(function () {
                var a = this;
                while (a.firstElementChild) a = a.firstElementChild;
                return a
            }).append(this)), this)
        },
        wrapInner: function (a) {
            return this.each(n.isFunction(a) ? function (b) {
                n(this).wrapInner(a.call(this, b))
            } : function () {
                var b = n(this),
                    c = b.contents();
                c.length ? c.wrapAll(a) : b.append(a)
            })
        },
        wrap: function (a) {
            var b = n.isFunction(a);
            return this.each(function (c) {
                n(this).wrapAll(b ? a.call(this, c) : a)
            })
        },
        unwrap: function () {
            return this.parent().each(function () {
                n.nodeName(this, "body") || n(this).replaceWith(this.childNodes)
            }).end()
        }
    }), n.expr.filters.hidden = function (a) {
        return a.offsetWidth <= 0 && a.offsetHeight <= 0
    }, n.expr.filters.visible = function (a) {
        return !n.expr.filters.hidden(a)
    };
    var wc = /%20/g,
        xc = /\[\]$/,
        yc = /\r?\n/g,
        zc = /^(?:submit|button|image|reset|file)$/i,
        Ac = /^(?:input|select|textarea|keygen)/i;

    function Bc(a, b, c, d) {
        var e;
        if (n.isArray(b)) n.each(b, function (b, e) {
            c || xc.test(a) ? d(a, e) : Bc(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d)
        });
        else if (c || "object" !== n.type(b)) d(a, b);
        else
            for (e in b) Bc(a + "[" + e + "]", b[e], c, d)
    }
    n.param = function (a, b) {
        var c, d = [],
            e = function (a, b) {
                b = n.isFunction(b) ? b() : null == b ? "" : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b)
            };
        if (void 0 === b && (b = n.ajaxSettings && n.ajaxSettings.traditional), n.isArray(a) || a.jquery && !n.isPlainObject(a)) n.each(a, function () {
            e(this.name, this.value)
        });
        else
            for (c in a) Bc(c, a[c], b, e);
        return d.join("&").replace(wc, "+")
    }, n.fn.extend({
        serialize: function () {
            return n.param(this.serializeArray())
        },
        serializeArray: function () {
            return this.map(function () {
                var a = n.prop(this, "elements");
                return a ? n.makeArray(a) : this
            }).filter(function () {
                var a = this.type;
                return this.name && !n(this).is(":disabled") && Ac.test(this.nodeName) && !zc.test(a) && (this.checked || !T.test(a))
            }).map(function (a, b) {
                var c = n(this).val();
                return null == c ? null : n.isArray(c) ? n.map(c, function (a) {
                    return {
                        name: b.name,
                        value: a.replace(yc, "\r\n")
                    }
                }) : {
                    name: b.name,
                    value: c.replace(yc, "\r\n")
                }
            }).get()
        }
    }), n.ajaxSettings.xhr = function () {
        try {
            return new XMLHttpRequest
        } catch (a) {}
    };
    var Cc = 0,
        Dc = {},
        Ec = {
            0: 200,
            1223: 204
        },
        Fc = n.ajaxSettings.xhr();
    a.ActiveXObject && n(a).on("unload", function () {
        for (var a in Dc) Dc[a]()
    }), k.cors = !!Fc && "withCredentials" in Fc, k.ajax = Fc = !!Fc, n.ajaxTransport(function (a) {
        var b;
        return k.cors || Fc && !a.crossDomain ? {
            send: function (c, d) {
                var e, f = a.xhr(),
                    g = ++Cc;
                if (f.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields)
                    for (e in a.xhrFields) f[e] = a.xhrFields[e];
                a.mimeType && f.overrideMimeType && f.overrideMimeType(a.mimeType), a.crossDomain || c["X-Requested-With"] || (c["X-Requested-With"] = "XMLHttpRequest");
                for (e in c) f.setRequestHeader(e, c[e]);
                b = function (a) {
                    return function () {
                        b && (delete Dc[g], b = f.onload = f.onerror = null, "abort" === a ? f.abort() : "error" === a ? d(f.status, f.statusText) : d(Ec[f.status] || f.status, f.statusText, "string" == typeof f.responseText ? {
                            text: f.responseText
                        } : void 0, f.getAllResponseHeaders()))
                    }
                }, f.onload = b(), f.onerror = b("error"), b = Dc[g] = b("abort");
                try {
                    f.send(a.hasContent && a.data || null)
                } catch (h) {
                    if (b) throw h
                }
            },
            abort: function () {
                b && b()
            }
        } : void 0
    }), n.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /(?:java|ecma)script/
        },
        converters: {
            "text script": function (a) {
                return n.globalEval(a), a
            }
        }
    }), n.ajaxPrefilter("script", function (a) {
        void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET")
    }), n.ajaxTransport("script", function (a) {
        if (a.crossDomain) {
            var b, c;
            return {
                send: function (d, e) {
                    b = n("<script>").prop({
                        async: !0,
                        charset: a.scriptCharset,
                        src: a.url
                    }).on("load error", c = function (a) {
                        b.remove(), c = null, a && e("error" === a.type ? 404 : 200, a.type)
                    }), l.head.appendChild(b[0])
                },
                abort: function () {
                    c && c()
                }
            }
        }
    });
    var Gc = [],
        Hc = /(=)\?(?=&|$)|\?\?/;
    n.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function () {
            var a = Gc.pop() || n.expando + "_" + cc++;
            return this[a] = !0, a
        }
    }), n.ajaxPrefilter("json jsonp", function (b, c, d) {
        var e, f, g, h = b.jsonp !== !1 && (Hc.test(b.url) ? "url" : "string" == typeof b.data && !(b.contentType || "").indexOf("application/x-www-form-urlencoded") && Hc.test(b.data) && "data");
        return h || "jsonp" === b.dataTypes[0] ? (e = b.jsonpCallback = n.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(Hc, "$1" + e) : b.jsonp !== !1 && (b.url += (dc.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function () {
            return g || n.error(e + " was not called"), g[0]
        }, b.dataTypes[0] = "json", f = a[e], a[e] = function () {
            g = arguments
        }, d.always(function () {
            a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, Gc.push(e)), g && n.isFunction(f) && f(g[0]), g = f = void 0
        }), "script") : void 0
    }), n.parseHTML = function (a, b, c) {
        if (!a || "string" != typeof a) return null;
        "boolean" == typeof b && (c = b, b = !1), b = b || l;
        var d = v.exec(a),
            e = !c && [];
        return d ? [b.createElement(d[1])] : (d = n.buildFragment([a], b, e), e && e.length && n(e).remove(), n.merge([], d.childNodes))
    };
    var Ic = n.fn.load;
    n.fn.load = function (a, b, c) {
        if ("string" != typeof a && Ic) return Ic.apply(this, arguments);
        var d, e, f, g = this,
            h = a.indexOf(" ");
        return h >= 0 && (d = n.trim(a.slice(h)), a = a.slice(0, h)), n.isFunction(b) ? (c = b, b = void 0) : b && "object" == typeof b && (e = "POST"), g.length > 0 && n.ajax({
            url: a,
            type: e,
            dataType: "html",
            data: b
        }).done(function (a) {
            f = arguments, g.html(d ? n("<div>").append(n.parseHTML(a)).find(d) : a)
        }).complete(c && function (a, b) {
            g.each(c, f || [a.responseText, b, a])
        }), this
    }, n.expr.filters.animated = function (a) {
        return n.grep(n.timers, function (b) {
            return a === b.elem
        }).length
    };
    var Jc = a.document.documentElement;

    function Kc(a) {
        return n.isWindow(a) ? a : 9 === a.nodeType && a.defaultView
    }
    n.offset = {
        setOffset: function (a, b, c) {
            var d, e, f, g, h, i, j, k = n.css(a, "position"),
                l = n(a),
                m = {};
            "static" === k && (a.style.position = "relative"), h = l.offset(), f = n.css(a, "top"), i = n.css(a, "left"), j = ("absolute" === k || "fixed" === k) && (f + i).indexOf("auto") > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), n.isFunction(b) && (b = b.call(a, c, h)), null != b.top && (m.top = b.top - h.top + g), null != b.left && (m.left = b.left - h.left + e), "using" in b ? b.using.call(a, m) : l.css(m)
        }
    }, n.fn.extend({
        offset: function (a) {
            if (arguments.length) return void 0 === a ? this : this.each(function (b) {
                n.offset.setOffset(this, a, b)
            });
            var b, c, d = this[0],
                e = {
                    top: 0,
                    left: 0
                },
                f = d && d.ownerDocument;
            if (f) return b = f.documentElement, n.contains(b, d) ? (typeof d.getBoundingClientRect !== U && (e = d.getBoundingClientRect()), c = Kc(f), {
                top: e.top + c.pageYOffset - b.clientTop,
                left: e.left + c.pageXOffset - b.clientLeft
            }) : e
        },
        position: function () {
            if (this[0]) {
                var a, b, c = this[0],
                    d = {
                        top: 0,
                        left: 0
                    };
                return "fixed" === n.css(c, "position") ? b = c.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), n.nodeName(a[0], "html") || (d = a.offset()), d.top += n.css(a[0], "borderTopWidth", !0), d.left += n.css(a[0], "borderLeftWidth", !0)), {
                    top: b.top - d.top - n.css(c, "marginTop", !0),
                    left: b.left - d.left - n.css(c, "marginLeft", !0)
                }
            }
        },
        offsetParent: function () {
            return this.map(function () {
                var a = this.offsetParent || Jc;
                while (a && !n.nodeName(a, "html") && "static" === n.css(a, "position")) a = a.offsetParent;
                return a || Jc
            })
        }
    }), n.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function (b, c) {
        var d = "pageYOffset" === c;
        n.fn[b] = function (e) {
            return J(this, function (b, e, f) {
                var g = Kc(b);
                return void 0 === f ? g ? g[c] : b[e] : void(g ? g.scrollTo(d ? a.pageXOffset : f, d ? f : a.pageYOffset) : b[e] = f)
            }, b, e, arguments.length, null)
        }
    }), n.each(["top", "left"], function (a, b) {
        n.cssHooks[b] = yb(k.pixelPosition, function (a, c) {
            return c ? (c = xb(a, b), vb.test(c) ? n(a).position()[b] + "px" : c) : void 0
        })
    }), n.each({
        Height: "height",
        Width: "width"
    }, function (a, b) {
        n.each({
            padding: "inner" + a,
            content: b,
            "": "outer" + a
        }, function (c, d) {
            n.fn[d] = function (d, e) {
                var f = arguments.length && (c || "boolean" != typeof d),
                    g = c || (d === !0 || e === !0 ? "margin" : "border");
                return J(this, function (b, c, d) {
                    var e;
                    return n.isWindow(b) ? b.document.documentElement["client" + a] : 9 === b.nodeType ? (e = b.documentElement, Math.max(b.body["scroll" + a], e["scroll" + a], b.body["offset" + a], e["offset" + a], e["client" + a])) : void 0 === d ? n.css(b, c, g) : n.style(b, c, d, g)
                }, b, f ? d : void 0, f, null)
            }
        })
    }), n.fn.size = function () {
        return this.length
    }, n.fn.andSelf = n.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function () {
        return n
    });
    var Lc = a.jQuery,
        Mc = a.$;
    return n.noConflict = function (b) {
        return a.$ === n && (a.$ = Mc), b && a.jQuery === n && (a.jQuery = Lc), n
    }, typeof b === U && (a.jQuery = a.$ = n), n
});

/********************************************
 * REVOLUTION 5.2.3 EXTENSION - VIDEO FUNCTIONS
 * @version: 1.7 (16.03.2016)
 * @requires jquery.themepunch.revolution.js
 * @author ThemePunch
 *********************************************/
! function (e) {
    function t(e) {
        return void 0 == e ? -1 : jQuery.isNumeric(e) ? e : e.split(":").length > 1 ? 60 * parseInt(e.split(":")[0], 0) + parseInt(e.split(":")[1], 0) : e
    }
    var a = jQuery.fn.revolution;
        // i = a.is_mobile();
    jQuery.extend(!0, a, {
        preLoadAudio: function (e, t) {
            e.find(".tp-audiolayer").each(function () {
                var e = jQuery(this),
                    i = {};
                0 === e.find("audio").length && (i.src = void 0 != e.data("videomp4") ? e.data("videomp4") : "", i.pre = e.data("videopreload") || "", void 0 === e.attr("id") && e.attr("audio-layer-" + Math.round(199999 * Math.random())), i.id = e.attr("id"), i.status = "prepared", i.start = jQuery.now(), i.waittime = 1e3 * e.data("videopreloadwait") || 5e3, ("auto" == i.pre || "canplaythrough" == i.pre || "canplay" == i.pre || "progress" == i.pre) && (void 0 === t.audioqueue && (t.audioqueue = []), t.audioqueue.push(i), a.manageVideoLayer(e, t)))
            })
        },
        preLoadAudioDone: function (e, t, a) {
            t.audioqueue && t.audioqueue.length > 0 && jQuery.each(t.audioqueue, function (t, i) {
                e.data("videomp4") !== i.src || i.pre !== a && "auto" !== i.pre || (i.status = "loaded")
            })
        },
        resetVideo: function (e, d) {
            switch (e.data("videotype")) {
                case "youtube":
                    e.data("player");
                    try {
                        if ("on" == e.data("forcerewind") && !i) {
                            var o = t(e.data("videostartat"));
                            o = -1 == o ? 0 : o, void 0 != e.data("player") && (e.data("player").seekTo(o), e.data("player").pauseVideo())
                        }
                    } catch (r) {}
                    0 == e.find(".tp-videoposter").length && punchgs.TweenLite.to(e.find("iframe"), .3, {
                        autoAlpha: 1,
                        display: "block",
                        ease: punchgs.Power3.easeInOut
                    });
                    break;
                case "vimeo":
                    var n = $f(e.find("iframe").attr("id"));
                    try {
                        if ("on" == e.data("forcerewind") && !i) {
                            var o = t(e.data("videostartat"));
                            o = -1 == o ? 0 : o, n.api("seekTo", o), n.api("pause")
                        }
                    } catch (r) {}
                    0 == e.find(".tp-videoposter").length && punchgs.TweenLite.to(e.find("iframe"), .3, {
                        autoAlpha: 1,
                        display: "block",
                        ease: punchgs.Power3.easeInOut
                    });
                    break;
                case "html5":
                    if (i && 1 == e.data("disablevideoonmobile")) return !1;
                    var s = "html5" == e.data("audio") ? "audio" : "video",
                        l = e.find(s),
                        u = l[0];
                    if (punchgs.TweenLite.to(l, .3, {
                            autoAlpha: 1,
                            display: "block",
                            ease: punchgs.Power3.easeInOut
                        }), "on" == e.data("forcerewind") && !e.hasClass("videoisplaying")) try {
                        var o = t(e.data("videostartat"));
                        u.currentTime = -1 == o ? 0 : o
                    } catch (r) {}("mute" == e.data("volume") || a.lastToggleState(e.data("videomutetoggledby")) || d.globalmute === !0) && (u.muted = !0)
            }
        },
        isVideoMuted: function (e, t) {
            var a = !1;
            switch (e.data("videotype")) {
                case "youtube":
                    try {
                        var i = e.data("player");
                        a = i.isMuted()
                    } catch (d) {}
                    break;
                case "vimeo":
                    try {
                        $f(e.find("iframe").attr("id"));
                        "mute" == e.data("volume") && (a = !0)
                    } catch (d) {}
                    break;
                case "html5":
                    var o = "html5" == e.data("audio") ? "audio" : "video",
                        r = e.find(o),
                        n = r[0];
                    n.muted && (a = !0)
            }
            return a
        },
        muteVideo: function (e, t) {
            switch (e.data("videotype")) {
                case "youtube":
                    try {
                        var a = e.data("player");
                        a.mute()
                    } catch (i) {}
                    break;
                case "vimeo":
                    try {
                        var d = $f(e.find("iframe").attr("id"));
                        e.data("volume", "mute"), d.api("setVolume", 0)
                    } catch (i) {}
                    break;
                case "html5":
                    var o = "html5" == e.data("audio") ? "audio" : "video",
                        r = e.find(o),
                        n = r[0];
                    n.muted = !0
            }
        },
        unMuteVideo: function (e, t) {
            if (t.globalmute !== !0) switch (e.data("videotype")) {
                case "youtube":
                    try {
                        var a = e.data("player");
                        a.unMute()
                    } catch (i) {}
                    break;
                case "vimeo":
                    try {
                        var d = $f(e.find("iframe").attr("id"));
                        e.data("volume", "1"), d.api("setVolume", 1)
                    } catch (i) {}
                    break;
                case "html5":
                    var o = "html5" == e.data("audio") ? "audio" : "video",
                        r = e.find(o),
                        n = r[0];
                    n.muted = !1
            }
        },
        stopVideo: function (e, t) {
            switch (e.data("videotype")) {
                case "youtube":
                    try {
                        var a = e.data("player");
                        a.pauseVideo()
                    } catch (i) {}
                    break;
                case "vimeo":
                    try {
                        var d = $f(e.find("iframe").attr("id"));
                        d.api("pause")
                    } catch (i) {}
                    break;
                case "html5":
                    var o = "html5" == e.data("audio") ? "audio" : "video",
                        r = e.find(o),
                        n = r[0];
                    void 0 != r && void 0 != n && n.pause()
            }
        },
        playVideo: function (e, o) {
            switch (clearTimeout(e.data("videoplaywait")), e.data("videotype")) {
                case "youtube":
                    if (0 == e.find("iframe").length) e.append(e.data("videomarkup")), r(e, o, !0);
                    else if (void 0 != e.data("player").playVideo) {
                        var n = t(e.data("videostartat")),
                            s = e.data("player").getCurrentTime();
                        1 == e.data("nextslideatend-triggered") && (s = -1, e.data("nextslideatend-triggered", 0)), -1 != n && n > s && e.data("player").seekTo(n), e.data("player").playVideo()
                    } else e.data("videoplaywait", setTimeout(function () {
                        a.playVideo(e, o)
                    }, 50));
                    break;
                case "vimeo":
                    if (0 == e.find("iframe").length) e.append(e.data("videomarkup")), r(e, o, !0);
                    else if (e.hasClass("rs-apiready")) {
                        var l = e.find("iframe").attr("id"),
                            u = $f(l);
                        void 0 == u.api("play") ? e.data("videoplaywait", setTimeout(function () {
                            a.playVideo(e, o)
                        }, 50)) : setTimeout(function () {
                            u.api("play");
                            var a = t(e.data("videostartat")),
                                i = e.data("currenttime");
                            1 == e.data("nextslideatend-triggered") && (i = -1, e.data("nextslideatend-triggered", 0)), -1 != a && a > i && u.api("seekTo", a)
                        }, 510)
                    } else e.data("videoplaywait", setTimeout(function () {
                        a.playVideo(e, o)
                    }, 50));
                    break;
                case "html5":
                    if (i && 1 == e.data("disablevideoonmobile")) return !1;
                    var p = "html5" == e.data("audio") ? "audio" : "video",
                        v = e.find(p),
                        c = v[0],
                        g = v.parent();
                    if (1 != g.data("metaloaded")) d(c, "loadedmetadata", function (e) {
                        a.resetVideo(e, o), c.play();
                        var i = t(e.data("videostartat")),
                            d = c.currentTime;
                        1 == e.data("nextslideatend-triggered") && (d = -1, e.data("nextslideatend-triggered", 0)), -1 != i && i > d && (c.currentTime = i)
                    }(e));
                    else {
                        c.play();
                        var n = t(e.data("videostartat")),
                            s = c.currentTime;
                        1 == e.data("nextslideatend-triggered") && (s = -1, e.data("nextslideatend-triggered", 0)), -1 != n && n > s && (c.currentTime = n)
                    }
            }
        },
        isVideoPlaying: function (e, t) {
            var a = !1;
            return void 0 != t.playingvideos && jQuery.each(t.playingvideos, function (t, i) {
                e.attr("id") == i.attr("id") && (a = !0)
            }), a
        },
        removeMediaFromList: function (e, t) {
            p(e, t)
        },
        prepareCoveredVideo: function (e, t, i) {
            var d = i.find("iframe, video"),
                o = e.split(":")[0],
                r = e.split(":")[1],
                n = i.closest(".tp-revslider-slidesli"),
                s = n.width() / n.height(),
                l = o / r,
                u = s / l * 100,
                p = l / s * 100;
            s > l ? punchgs.TweenLite.to(d, .001, {
                height: u + "%",
                width: "100%",
                top: -(u - 100) / 2 + "%",
                left: "0px",
                position: "absolute"
            }) : punchgs.TweenLite.to(d, .001, {
                width: p + "%",
                height: "100%",
                left: -(p - 100) / 2 + "%",
                top: "0px",
                position: "absolute"
            }), d.hasClass("resizelistener") || (d.addClass("resizelistener"), jQuery(window).resize(function () {
                clearTimeout(d.data("resizelistener")), d.data("resizelistener", setTimeout(function () {
                    a.prepareCoveredVideo(e, t, i)
                }, 30))
            }))
        },
        checkVideoApis: function (e, t, a) {
            var i = "https:" === location.protocol ? "https" : "http";
            if ((void 0 != e.data("ytid") || e.find("iframe").length > 0 && e.find("iframe").attr("src").toLowerCase().indexOf("youtube") > 0) && (t.youtubeapineeded = !0), (void 0 != e.data("ytid") || e.find("iframe").length > 0 && e.find("iframe").attr("src").toLowerCase().indexOf("youtube") > 0) && 0 == a.addedyt) {
                t.youtubestarttime = jQuery.now(), a.addedyt = 1;
                var d = document.createElement("script");
                d.src = "https://www.youtube.com/iframe_api";
                var o = document.getElementsByTagName("script")[0],
                    r = !0;
                jQuery("head").find("*").each(function () {
                    "https://www.youtube.com/iframe_api" == jQuery(this).attr("src") && (r = !1)
                }), r && o.parentNode.insertBefore(d, o)
            }
            if ((void 0 != e.data("vimeoid") || e.find("iframe").length > 0 && e.find("iframe").attr("src").toLowerCase().indexOf("vimeo") > 0) && (t.vimeoapineeded = !0), (void 0 != e.data("vimeoid") || e.find("iframe").length > 0 && e.find("iframe").attr("src").toLowerCase().indexOf("vimeo") > 0) && 0 == a.addedvim) {
                t.vimeostarttime = jQuery.now(), a.addedvim = 1;
                var n = document.createElement("script"),
                    o = document.getElementsByTagName("script")[0],
                    r = !0;
                n.src = i + "://f.vimeocdn.com/js/froogaloop2.min.js", jQuery("head").find("*").each(function () {
                    jQuery(this).attr("src") == i + "://f.vimeocdn.com/js/froogaloop2.min.js" && (r = !1)
                }), r && o.parentNode.insertBefore(n, o)
            }
            return a
        },
        manageVideoLayer: function (e, o, n, s) {
            var u = e.data("videoattributes"),
                p = e.data("ytid"),
                v = e.data("vimeoid"),
                c = "auto" === e.data("videopreload") || "canplay" === e.data("videopreload") || "canplaythrough" === e.data("videopreload") || "progress" === e.data("videopreload") ? "auto" : e.data("videopreload"),
                g = e.data("videomp4"),
                f = e.data("videowebm"),
                m = e.data("videoogv"),
                y = e.data("allowfullscreenvideo"),
                h = e.data("videocontrols"),
                b = "http",
                w = "loop" == e.data("videoloop") ? "loop" : "loopandnoslidestop" == e.data("videoloop") ? "loop" : "",
                k = void 0 != g || void 0 != f ? "html5" : void 0 != p && String(p).length > 1 ? "youtube" : void 0 != v && String(v).length > 1 ? "vimeo" : "none",
                T = "html5" == e.data("audio") ? "audio" : "video",
                x = "html5" == k && 0 == e.find(T).length ? "html5" : "youtube" == k && 0 == e.find("iframe").length ? "youtube" : "vimeo" == k && 0 == e.find("iframe").length ? "vimeo" : "none";
            switch (w = e.data("nextslideatend") === !0 ? "" : w, e.data("videotype", k), x) {
                case "html5":
                    "controls" != h && (h = "");
                    var T = "video";
                    "html5" == e.data("audio") && (T = "audio", e.addClass("tp-audio-html5"));
                    var L = "<" + T + ' style="object-fit:cover;background-size:cover;visible:hidden;width:100%; height:100%" class="" ' + w + ' preload="' + c + '">';
                    "auto" == c && (o.mediapreload = !0), void 0 != f && "firefox" == a.get_browser().toLowerCase() && (L = L + '<source src="' + f + '" type="video/webm" />'), void 0 != g && (L = L + '<source src="' + g + '" type="video/mp4" />'), void 0 != m && (L = L + '<source src="' + m + '" type="video/ogg" />'), L = L + "</" + T + ">";
                    var V = "";
                    ("true" === y || y === !0) && (V = '<div class="tp-video-button-wrap"><button  type="button" class="tp-video-button tp-vid-full-screen">Full-Screen</button></div>'), "controls" == h && (L += '<div class="tp-video-controls"><div class="tp-video-button-wrap"><button type="button" class="tp-video-button tp-vid-play-pause">Play</button></div><div class="tp-video-seek-bar-wrap"><input  type="range" class="tp-seek-bar" value="0"></div><div class="tp-video-button-wrap"><button  type="button" class="tp-video-button tp-vid-mute">Mute</button></div><div class="tp-video-vol-bar-wrap"><input  type="range" class="tp-volume-bar" min="0" max="1" step="0.1" value="1"></div>' + V + "</div>"), e.data("videomarkup", L), e.append(L), (i && 1 == e.data("disablevideoonmobile") || a.isIE(8)) && e.find(T).remove(), e.find(T).each(function (t) {
                        var i = this,
                            r = jQuery(this);
                        r.parent().hasClass("html5vid") || r.wrap('<div class="html5vid" style="position:relative;top:0px;left:0px;width:100%;height:100%; overflow:hidden;"></div>');
                        var n = r.parent();
                        1 != n.data("metaloaded") && d(i, "loadedmetadata", function (e) {
                            l(e, o), a.resetVideo(e, o)
                        }(e))
                    });
                    break;
                case "youtube":
                    b = "http", "https:" === location.protocol && (b = "https"), "none" == h && (u = u.replace("controls=1", "controls=0"), -1 == u.toLowerCase().indexOf("controls") && (u += "&controls=0"));
                    var C = t(e.data("videostartat")),
                        P = t(e.data("videoendat")); - 1 != C && (u = u + "&start=" + C), -1 != P && (u = u + "&end=" + P);
                    var I = u.split("origin=" + b + "://"),
                        j = "";
                    I.length > 1 ? (j = I[0] + "origin=" + b + "://", self.location.href.match(/www/gi) && !I[1].match(/www/gi) && (j += "www."), j += I[1]) : j = u;
                    var A = "true" === y || y === !0 ? "allowfullscreen" : "";
                    e.data("videomarkup", '<iframe style="visible:hidden" src="' + b + "://www.youtube.com/embed/" + p + "?" + j + '" ' + A + ' width="100%" height="100%" style="width:100%;height:100%"></iframe>');
                    break;
                case "vimeo":
                    "https:" === location.protocol && (b = "https"), e.data("videomarkup", '<iframe style="visible:hidden" src="' + b + "://player.vimeo.com/video/" + v + "?autoplay=0&" + u + '" webkitallowfullscreen mozallowfullscreen allowfullscreen width="100%" height="100%" style="100%;height:100%"></iframe>')
            }
            var _ = i && "on" == e.data("noposteronmobile");
            if (void 0 != e.data("videoposter") && e.data("videoposter").length > 2 && !_) 0 == e.find(".tp-videoposter").length && e.append('<div class="tp-videoposter noSwipe" style="cursor:pointer; position:absolute;top:0px;left:0px;width:100%;height:100%;z-index:3;background-image:url(' + e.data("videoposter") + '); background-size:cover;background-position:center center;"></div>'), 0 == e.find("iframe").length && e.find(".tp-videoposter").click(function () {
                if (a.playVideo(e, o), i) {
                    if (1 == e.data("disablevideoonmobile")) return !1;
                    punchgs.TweenLite.to(e.find(".tp-videoposter"), .3, {
                        autoAlpha: 0,
                        force3D: "auto",
                        ease: punchgs.Power3.easeInOut
                    }), punchgs.TweenLite.to(e.find("iframe"), .3, {
                        autoAlpha: 1,
                        display: "block",
                        ease: punchgs.Power3.easeInOut
                    })
                }
            });
            else {
                if (i && 1 == e.data("disablevideoonmobile")) return !1;
                0 != e.find("iframe").length || "youtube" != k && "vimeo" != k || (e.append(e.data("videomarkup")), r(e, o, !1))
            }
            "none" != e.data("dottedoverlay") && void 0 != e.data("dottedoverlay") && 1 != e.find(".tp-dottedoverlay").length && e.append('<div class="tp-dottedoverlay ' + e.data("dottedoverlay") + '"></div>'), e.addClass("HasListener"), 1 == e.data("bgvideo") && punchgs.TweenLite.set(e.find("video, iframe"), {
                autoAlpha: 0
            })
        }
    });
    var d = function (e, t, a) {
            e.addEventListener ? e.addEventListener(t, a, !1) : e.attachEvent(t, a, !1)
        },
        o = function (e, t, a) {
            var i = {};
            return i.video = e, i.videotype = t, i.settings = a, i
        },
        r = function (e, d, r) {
            var l = e.find("iframe"),
                v = "iframe" + Math.round(1e5 * Math.random() + 1),
                c = e.data("videoloop"),
                g = "loopandnoslidestop" != c;
            if (c = "loop" == c || "loopandnoslidestop" == c, 1 == e.data("forcecover")) {
                e.removeClass("fullscreenvideo").addClass("coverscreenvideo");
                var f = e.data("aspectratio");
                void 0 != f && f.split(":").length > 1 && a.prepareCoveredVideo(f, d, e)
            }
            if (1 == e.data("bgvideo")) {
                var f = e.data("aspectratio");
                void 0 != f && f.split(":").length > 1 && a.prepareCoveredVideo(f, d, e)
            }
            if (l.attr("id", v), r && e.data("startvideonow", !0), 1 !== e.data("videolistenerexist")) switch (e.data("videotype")) {
                case "youtube":
                    var m = new YT.Player(v, {
                        events: {
                            onStateChange: function (i) {
                                var r = e.closest(".tp-simpleresponsive"),
                                    l = (e.data("videorate"), e.data("videostart"), s());
                                if (i.data == YT.PlayerState.PLAYING) punchgs.TweenLite.to(e.find(".tp-videoposter"), .3, {
                                    autoAlpha: 0,
                                    force3D: "auto",
                                    ease: punchgs.Power3.easeInOut
                                }), punchgs.TweenLite.to(e.find("iframe"), .3, {
                                    autoAlpha: 1,
                                    display: "block",
                                    ease: punchgs.Power3.easeInOut
                                }), "mute" == e.data("volume") || a.lastToggleState(e.data("videomutetoggledby")) || d.globalmute === !0 ? m.mute() : (m.unMute(), m.setVolume(parseInt(e.data("volume"), 0) || 75)), d.videoplaying = !0, u(e, d), g ? d.c.trigger("stoptimer") : d.videoplaying = !1, d.c.trigger("revolution.slide.onvideoplay", o(m, "youtube", e.data())), a.toggleState(e.data("videotoggledby"));
                                else {
                                    if (0 == i.data && c) {
                                        var v = t(e.data("videostartat")); - 1 != v && m.seekTo(v), m.playVideo(), a.toggleState(e.data("videotoggledby"))
                                    }!l && (0 == i.data || 2 == i.data) && "on" == e.data("showcoveronpause") && e.find(".tp-videoposter").length > 0 && (punchgs.TweenLite.to(e.find(".tp-videoposter"), .3, {
                                        autoAlpha: 1,
                                        force3D: "auto",
                                        ease: punchgs.Power3.easeInOut
                                    }), punchgs.TweenLite.to(e.find("iframe"), .3, {
                                        autoAlpha: 0,
                                        ease: punchgs.Power3.easeInOut
                                    })), -1 != i.data && 3 != i.data && (d.videoplaying = !1, d.tonpause = !1, p(e, d), r.trigger("starttimer"), d.c.trigger("revolution.slide.onvideostop", o(m, "youtube", e.data())), (void 0 == d.currentLayerVideoIsPlaying || d.currentLayerVideoIsPlaying.attr("id") == e.attr("id")) && a.unToggleState(e.data("videotoggledby"))), 0 == i.data && 1 == e.data("nextslideatend") ? (n(), e.data("nextslideatend-triggered", 1), d.c.revnext(), p(e, d)) : (p(e, d), d.videoplaying = !1, r.trigger("starttimer"), d.c.trigger("revolution.slide.onvideostop", o(m, "youtube", e.data())), (void 0 == d.currentLayerVideoIsPlaying || d.currentLayerVideoIsPlaying.attr("id") == e.attr("id")) && a.unToggleState(e.data("videotoggledby")))
                                }
                            },
                            onReady: function (a) {
                                var d = e.data("videorate");
                                e.data("videostart");
                                if (e.addClass("rs-apiready"), void 0 != d && a.target.setPlaybackRate(parseFloat(d)), e.find(".tp-videoposter").unbind("click"), e.find(".tp-videoposter").click(function () {
                                        i || m.playVideo()
                                    }), e.data("startvideonow")) {
                                    e.data("player").playVideo();
                                    var o = t(e.data("videostartat")); - 1 != o && e.data("player").seekTo(o)
                                }
                                e.data("videolistenerexist", 1)
                            }
                        }
                    });
                    e.data("player", m);
                    break;
                case "vimeo":
                    for (var y, h = l.attr("src"), b = {}, w = h, k = /([^&=]+)=([^&]*)/g; y = k.exec(w);) b[decodeURIComponent(y[1])] = decodeURIComponent(y[2]);
                    h = void 0 != b.player_id ? h.replace(b.player_id, v) : h + "&player_id=" + v;
                    try {
                        h = h.replace("api=0", "api=1")
                    } catch (T) {}
                    h += "&api=1", l.attr("src", h);
                    var m = e.find("iframe")[0],
                        x = (jQuery("#" + v), $f(v));
                    x.addEvent("ready", function () {
                        if (e.addClass("rs-apiready"), x.addEvent("play", function (t) {
                                e.data("nextslidecalled", 0), punchgs.TweenLite.to(e.find(".tp-videoposter"), .3, {
                                    autoAlpha: 0,
                                    force3D: "auto",
                                    ease: punchgs.Power3.easeInOut
                                }), punchgs.TweenLite.to(e.find("iframe"), .3, {
                                    autoAlpha: 1,
                                    display: "block",
                                    ease: punchgs.Power3.easeInOut
                                }), d.c.trigger("revolution.slide.onvideoplay", o(x, "vimeo", e.data())), d.videoplaying = !0, u(e, d), g ? d.c.trigger("stoptimer") : d.videoplaying = !1, "mute" == e.data("volume") || a.lastToggleState(e.data("videomutetoggledby")) || d.globalmute === !0 ? x.api("setVolume", "0") : x.api("setVolume", parseInt(e.data("volume"), 0) / 100 || .75), a.toggleState(e.data("videotoggledby"))
                            }), x.addEvent("playProgress", function (a) {
                                var i = t(e.data("videoendat"));
                                if (e.data("currenttime", a.seconds), 0 != i && Math.abs(i - a.seconds) < .3 && i > a.seconds && 1 != e.data("nextslidecalled"))
                                    if (c) {
                                        x.api("play");
                                        var o = t(e.data("videostartat")); - 1 != o && x.api("seekTo", o)
                                    } else 1 == e.data("nextslideatend") && (e.data("nextslideatend-triggered", 1), e.data("nextslidecalled", 1), d.c.revnext()), x.api("pause")
                            }), x.addEvent("finish", function (t) {
                                p(e, d), d.videoplaying = !1, d.c.trigger("starttimer"), d.c.trigger("revolution.slide.onvideostop", o(x, "vimeo", e.data())), 1 == e.data("nextslideatend") && (e.data("nextslideatend-triggered", 1), d.c.revnext()), (void 0 == d.currentLayerVideoIsPlaying || d.currentLayerVideoIsPlaying.attr("id") == e.attr("id")) && a.unToggleState(e.data("videotoggledby"))
                            }), x.addEvent("pause", function (t) {
                                e.find(".tp-videoposter").length > 0 && "on" == e.data("showcoveronpause") && (punchgs.TweenLite.to(e.find(".tp-videoposter"), .3, {
                                    autoAlpha: 1,
                                    force3D: "auto",
                                    ease: punchgs.Power3.easeInOut
                                }), punchgs.TweenLite.to(e.find("iframe"), .3, {
                                    autoAlpha: 0,
                                    ease: punchgs.Power3.easeInOut
                                })), d.videoplaying = !1, d.tonpause = !1, p(e, d), d.c.trigger("starttimer"), d.c.trigger("revolution.slide.onvideostop", o(x, "vimeo", e.data())), (void 0 == d.currentLayerVideoIsPlaying || d.currentLayerVideoIsPlaying.attr("id") == e.attr("id")) && a.unToggleState(e.data("videotoggledby"))
                            }), e.find(".tp-videoposter").unbind("click"), e.find(".tp-videoposter").click(function () {
                                return i ? void 0 : (x.api("play"), !1)
                            }), e.data("startvideonow")) {
                            x.api("play");
                            var r = t(e.data("videostartat")); - 1 != r && x.api("seekTo", r)
                        }
                        e.data("videolistenerexist", 1)
                    })
            } else {
                var L = t(e.data("videostartat"));
                switch (e.data("videotype")) {
                    case "youtube":
                        r && (e.data("player").playVideo(), -1 != L && e.data("player").seekTo());
                        break;
                    case "vimeo":
                        if (r) {
                            var x = $f(e.find("iframe").attr("id"));
                            x.api("play"), -1 != L && x.api("seekTo", L)
                        }
                }
            }
        },
        n = function () {
            document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitExitFullscreen && document.webkitExitFullscreen()
        },
        s = function () {
            try {
                if (void 0 !== window.fullScreen) return window.fullScreen;
                var e = 5;
                return jQuery.browser.webkit && /Apple Computer/.test(navigator.vendor) && (e = 42), screen.width == window.innerWidth && Math.abs(screen.height - window.innerHeight) < e
            } catch (t) {}
        },
        l = function (e, r, l) {
            if (i && 1 == e.data("disablevideoonmobile")) return !1;
            var v = "html5" == e.data("audio") ? "audio" : "video",
                c = e.find(v),
                g = c[0],
                f = c.parent(),
                m = e.data("videoloop"),
                y = "loopandnoslidestop" != m;
            if (m = "loop" == m || "loopandnoslidestop" == m, f.data("metaloaded", 1), 1 != e.data("bgvideo") || "none" !== e.data("videoloop") && e.data("videoloop") !== !1 || (y = !1), void 0 == c.attr("control") && (0 != e.find(".tp-video-play-button").length || i || e.append('<div class="tp-video-play-button"><i class="revicon-right-dir"></i><span class="tp-revstop">&nbsp;</span></div>'), e.find("video, .tp-poster, .tp-video-play-button").click(function () {
                    e.hasClass("videoisplaying") ? g.pause() : g.play()
                })), 1 == e.data("forcecover") || e.hasClass("fullscreenvideo") || 1 == e.data("bgvideo"))
                if (1 == e.data("forcecover") || 1 == e.data("bgvideo")) {
                    f.addClass("fullcoveredvideo");
                    var h = e.data("aspectratio") || "4:3";
                    a.prepareCoveredVideo(h, r, e)
                } else f.addClass("fullscreenvideo");
            var b = e.find(".tp-vid-play-pause")[0],
                w = e.find(".tp-vid-mute")[0],
                k = e.find(".tp-vid-full-screen")[0],
                T = e.find(".tp-seek-bar")[0],
                x = e.find(".tp-volume-bar")[0];
            void 0 != b && d(b, "click", function () {
                1 == g.paused ? g.play() : g.pause()
            }), void 0 != w && d(w, "click", function () {
                0 == g.muted ? (g.muted = !0, w.innerHTML = "Unmute") : (g.muted = !1, w.innerHTML = "Mute")
            }), void 0 != k && k && d(k, "click", function () {
                g.requestFullscreen ? g.requestFullscreen() : g.mozRequestFullScreen ? g.mozRequestFullScreen() : g.webkitRequestFullscreen && g.webkitRequestFullscreen()
            }), void 0 != T && (d(T, "change", function () {
                var e = g.duration * (T.value / 100);
                g.currentTime = e
            }), d(T, "mousedown", function () {
                e.addClass("seekbardragged"), g.pause()
            }), d(T, "mouseup", function () {
                e.removeClass("seekbardragged"), g.play()
            })), d(g, "canplaythrough", function () {
                a.preLoadAudioDone(e, r, "canplaythrough")
            }), d(g, "canplay", function () {
                a.preLoadAudioDone(e, r, "canplay")
            }), d(g, "progress", function () {
                a.preLoadAudioDone(e, r, "progress")
            }), d(g, "timeupdate", function () {
                var a = 100 / g.duration * g.currentTime,
                    i = t(e.data("videoendat")),
                    d = g.currentTime;
                if (void 0 != T && (T.value = a), 0 != i && -1 != i && Math.abs(i - d) <= .3 && i > d && 1 != e.data("nextslidecalled"))
                    if (m) {
                        g.play();
                        var o = t(e.data("videostartat")); - 1 != o && (g.currentTime = o)
                    } else 1 == e.data("nextslideatend") && (e.data("nextslideatend-triggered", 1), e.data("nextslidecalled", 1), r.just_called_nextslide_at_htmltimer = !0, r.c.revnext(), setTimeout(function () {
                        r.just_called_nextslide_at_htmltimer = !1
                    }, 1e3)), g.pause()
            }), void 0 != x && d(x, "change", function () {
                g.volume = x.value
            }), d(g, "play", function () {
                e.data("nextslidecalled", 0);
                var t = e.data("volume");
                t = void 0 != t && "mute" != t ? parseFloat(t) / 100 : t, r.globalmute === !0 ? g.muted = !0 : g.muted = !1, t > 1 && (t /= 100), "mute" == t ? g.muted = !0 : void 0 != t && (g.volume = t), e.addClass("videoisplaying");
                var i = "html5" == e.data("audio") ? "audio" : "video";
                u(e, r), y && "audio" != i ? (r.videoplaying = !0, r.c.trigger("stoptimer"), r.c.trigger("revolution.slide.onvideoplay", o(g, "html5", e.data()))) : (r.videoplaying = !1, "audio" != i && r.c.trigger("starttimer"), r.c.trigger("revolution.slide.onvideostop", o(g, "html5", e.data()))), punchgs.TweenLite.to(e.find(".tp-videoposter"), .3, {
                    autoAlpha: 0,
                    force3D: "auto",
                    ease: punchgs.Power3.easeInOut
                }), punchgs.TweenLite.to(e.find(i), .3, {
                    autoAlpha: 1,
                    display: "block",
                    ease: punchgs.Power3.easeInOut
                });
                var d = e.find(".tp-vid-play-pause")[0],
                    n = e.find(".tp-vid-mute")[0];
                void 0 != d && (d.innerHTML = "Pause"), void 0 != n && g.muted && (n.innerHTML = "Unmute"), a.toggleState(e.data("videotoggledby"))
            }), d(g, "pause", function () {
                var t = "html5" == e.data("audio") ? "audio" : "video",
                    i = s();
                !i && e.find(".tp-videoposter").length > 0 && "on" == e.data("showcoveronpause") && !e.hasClass("seekbardragged") && (punchgs.TweenLite.to(e.find(".tp-videoposter"), .3, {
                    autoAlpha: 1,
                    force3D: "auto",
                    ease: punchgs.Power3.easeInOut
                }), punchgs.TweenLite.to(e.find(t), .3, {
                    autoAlpha: 0,
                    ease: punchgs.Power3.easeInOut
                })), e.removeClass("videoisplaying"), r.videoplaying = !1, p(e, r), "audio" != t && r.c.trigger("starttimer"), r.c.trigger("revolution.slide.onvideostop", o(g, "html5", e.data()));
                var d = e.find(".tp-vid-play-pause")[0];
                void 0 != d && (d.innerHTML = "Play"), (void 0 == r.currentLayerVideoIsPlaying || r.currentLayerVideoIsPlaying.attr("id") == e.attr("id")) && a.unToggleState(e.data("videotoggledby"))
            }), d(g, "ended", function () {
                n(), p(e, r), r.videoplaying = !1, p(e, r), "audio" != v && r.c.trigger("starttimer"), r.c.trigger("revolution.slide.onvideostop", o(g, "html5", e.data())), e.data("nextslideatend") === !0 && (1 == !r.just_called_nextslide_at_htmltimer && (e.data("nextslideatend-triggered", 1), r.c.revnext(), r.just_called_nextslide_at_htmltimer = !0), setTimeout(function () {
                    r.just_called_nextslide_at_htmltimer = !1
                }, 1500)), e.removeClass("videoisplaying")
            })
        },
        u = function (e, t) {
            void 0 == t.playingvideos && (t.playingvideos = new Array), e.data("stopallvideos") && void 0 != t.playingvideos && t.playingvideos.length > 0 && (t.lastplayedvideos = jQuery.extend(!0, [], t.playingvideos), jQuery.each(t.playingvideos, function (e, i) {
                a.stopVideo(i, t)
            })), t.playingvideos.push(e), t.currentLayerVideoIsPlaying = e
        },
        p = function (e, t) {
            void 0 != t.playingvideos && jQuery.inArray(e, t.playingvideos) >= 0 && t.playingvideos.splice(jQuery.inArray(e, t.playingvideos), 1)
        }
}(jQuery);

/************************************************
 * REVOLUTION 5.2 EXTENSION - SLIDE ANIMATIONS
 * @version: 1.1.2 (23.02.2016)
 * @requires jquery.themepunch.revolution.js
 * @author ThemePunch
************************************************/
!function(t){var e=jQuery.fn.revolution;jQuery.extend(!0,e,{animateSlide:function(t,e,o,a,i,r,s,l,d){return n(t,e,o,a,i,r,s,l,d)}});var o=function(t,o,a,i){var n=t,r=n.find(".defaultimg"),s=n.data("zoomstart"),l=n.data("rotationstart");void 0!=r.data("currotate")&&(l=r.data("currotate")),void 0!=r.data("curscale")&&"box"==i?s=100*r.data("curscale"):void 0!=r.data("curscale")&&(s=r.data("curscale")),e.slotSize(r,o);var d=r.attr("src"),h=r.css("backgroundColor"),f=o.width,c=o.height,p=r.data("fxof"),u=0;"on"==o.autoHeight&&(c=o.c.height()),void 0==p&&(p=0);var g=0,w=r.data("bgfit"),v=r.data("bgrepeat"),m=r.data("bgposition");switch(void 0==w&&(w="cover"),void 0==v&&(v="no-repeat"),void 0==m&&(m="center center"),i){case"box":for(var x=0,y=0,T=0;T<o.slots;T++){y=0;for(var z=0;z<o.slots;z++)n.append('<div class="slot" style="position:absolute;top:'+(u+y)+"px;left:"+(p+x)+"px;width:"+o.slotw+"px;height:"+o.sloth+'px;overflow:hidden;"><div class="slotslide" data-x="'+x+'" data-y="'+y+'" style="position:absolute;top:0px;left:0px;width:'+o.slotw+"px;height:"+o.sloth+'px;overflow:hidden;"><div style="position:absolute;top:'+(0-y)+"px;left:"+(0-x)+"px;width:"+f+"px;height:"+c+"px;background-color:"+h+";background-image:url("+d+");background-repeat:"+v+";background-size:"+w+";background-position:"+m+';"></div></div></div>'),y+=o.sloth,void 0!=s&&void 0!=l&&punchgs.TweenLite.set(n.find(".slot").last(),{rotationZ:l});x+=o.slotw}break;case"vertical":case"horizontal":if("horizontal"==i){if(!a)var g=0-o.slotw;for(var z=0;z<o.slots;z++)n.append('<div class="slot" style="position:absolute;top:'+(0+u)+"px;left:"+(p+z*o.slotw)+"px;overflow:hidden;width:"+(o.slotw+.6)+"px;height:"+c+'px"><div class="slotslide" style="position:absolute;top:0px;left:'+g+"px;width:"+(o.slotw+.6)+"px;height:"+c+'px;overflow:hidden;"><div style="background-color:'+h+";position:absolute;top:0px;left:"+(0-z*o.slotw)+"px;width:"+f+"px;height:"+c+"px;background-image:url("+d+");background-repeat:"+v+";background-size:"+w+";background-position:"+m+';"></div></div></div>'),void 0!=s&&void 0!=l&&punchgs.TweenLite.set(n.find(".slot").last(),{rotationZ:l})}else{if(!a)var g=0-o.sloth;for(var z=0;z<o.slots+2;z++)n.append('<div class="slot" style="position:absolute;top:'+(u+z*o.sloth)+"px;left:"+p+"px;overflow:hidden;width:"+f+"px;height:"+o.sloth+'px"><div class="slotslide" style="position:absolute;top:'+g+"px;left:0px;width:"+f+"px;height:"+o.sloth+'px;overflow:hidden;"><div style="background-color:'+h+";position:absolute;top:"+(0-z*o.sloth)+"px;left:0px;width:"+f+"px;height:"+c+"px;background-image:url("+d+");background-repeat:"+v+";background-size:"+w+";background-position:"+m+';"></div></div></div>'),void 0!=s&&void 0!=l&&punchgs.TweenLite.set(n.find(".slot").last(),{rotationZ:l})}}},a=function(t,e,o,a,i){function n(){jQuery.each(y,function(t,e){(e[0]==o||e[8]==o)&&(w=e[1],v=e[2],m=x),x+=1})}var r=punchgs.Power1.easeIn,s=punchgs.Power1.easeOut,l=punchgs.Power1.easeInOut,d=punchgs.Power2.easeIn,h=punchgs.Power2.easeOut,f=punchgs.Power2.easeInOut,c=(punchgs.Power3.easeIn,punchgs.Power3.easeOut),p=punchgs.Power3.easeInOut,u=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45],g=[16,17,18,19,20,21,22,23,24,25,27],w=0,v=1,m=0,x=0,y=(new Array,[["boxslide",0,1,10,0,"box",!1,null,0,s,s,500,6],["boxfade",1,0,10,0,"box",!1,null,1,l,l,700,5],["slotslide-horizontal",2,0,0,200,"horizontal",!0,!1,2,f,f,700,3],["slotslide-vertical",3,0,0,200,"vertical",!0,!1,3,f,f,700,3],["curtain-1",4,3,0,0,"horizontal",!0,!0,4,s,s,300,5],["curtain-2",5,3,0,0,"horizontal",!0,!0,5,s,s,300,5],["curtain-3",6,3,25,0,"horizontal",!0,!0,6,s,s,300,5],["slotzoom-horizontal",7,0,0,400,"horizontal",!0,!0,7,s,s,300,7],["slotzoom-vertical",8,0,0,0,"vertical",!0,!0,8,h,h,500,8],["slotfade-horizontal",9,0,0,500,"horizontal",!0,null,9,h,h,500,25],["slotfade-vertical",10,0,0,500,"vertical",!0,null,10,h,h,500,25],["fade",11,0,1,300,"horizontal",!0,null,11,f,f,1e3,1],["crossfade",11,1,1,300,"horizontal",!0,null,11,f,f,1e3,1],["fadethroughdark",11,2,1,300,"horizontal",!0,null,11,f,f,1e3,1],["fadethroughlight",11,3,1,300,"horizontal",!0,null,11,f,f,1e3,1],["fadethroughtransparent",11,4,1,300,"horizontal",!0,null,11,f,f,1e3,1],["slideleft",12,0,1,0,"horizontal",!0,!0,12,p,p,1e3,1],["slideup",13,0,1,0,"horizontal",!0,!0,13,p,p,1e3,1],["slidedown",14,0,1,0,"horizontal",!0,!0,14,p,p,1e3,1],["slideright",15,0,1,0,"horizontal",!0,!0,15,p,p,1e3,1],["slideoverleft",12,7,1,0,"horizontal",!0,!0,12,p,p,1e3,1],["slideoverup",13,7,1,0,"horizontal",!0,!0,13,p,p,1e3,1],["slideoverdown",14,7,1,0,"horizontal",!0,!0,14,p,p,1e3,1],["slideoverright",15,7,1,0,"horizontal",!0,!0,15,p,p,1e3,1],["slideremoveleft",12,8,1,0,"horizontal",!0,!0,12,p,p,1e3,1],["slideremoveup",13,8,1,0,"horizontal",!0,!0,13,p,p,1e3,1],["slideremovedown",14,8,1,0,"horizontal",!0,!0,14,p,p,1e3,1],["slideremoveright",15,8,1,0,"horizontal",!0,!0,15,p,p,1e3,1],["papercut",16,0,0,600,"",null,null,16,p,p,1e3,2],["3dcurtain-horizontal",17,0,20,100,"vertical",!1,!0,17,l,l,500,7],["3dcurtain-vertical",18,0,10,100,"horizontal",!1,!0,18,l,l,500,5],["cubic",19,0,20,600,"horizontal",!1,!0,19,p,p,500,1],["cube",19,0,20,600,"horizontal",!1,!0,20,p,p,500,1],["flyin",20,0,4,600,"vertical",!1,!0,21,c,p,500,1],["turnoff",21,0,1,500,"horizontal",!1,!0,22,p,p,500,1],["incube",22,0,20,200,"horizontal",!1,!0,23,f,f,500,1],["cubic-horizontal",23,0,20,500,"vertical",!1,!0,24,h,h,500,1],["cube-horizontal",23,0,20,500,"vertical",!1,!0,25,h,h,500,1],["incube-horizontal",24,0,20,500,"vertical",!1,!0,26,f,f,500,1],["turnoff-vertical",25,0,1,200,"horizontal",!1,!0,27,f,f,500,1],["fadefromright",12,1,1,0,"horizontal",!0,!0,28,f,f,1e3,1],["fadefromleft",15,1,1,0,"horizontal",!0,!0,29,f,f,1e3,1],["fadefromtop",14,1,1,0,"horizontal",!0,!0,30,f,f,1e3,1],["fadefrombottom",13,1,1,0,"horizontal",!0,!0,31,f,f,1e3,1],["fadetoleftfadefromright",12,2,1,0,"horizontal",!0,!0,32,f,f,1e3,1],["fadetorightfadefromleft",15,2,1,0,"horizontal",!0,!0,33,f,f,1e3,1],["fadetobottomfadefromtop",14,2,1,0,"horizontal",!0,!0,34,f,f,1e3,1],["fadetotopfadefrombottom",13,2,1,0,"horizontal",!0,!0,35,f,f,1e3,1],["parallaxtoright",12,3,1,0,"horizontal",!0,!0,36,f,d,1500,1],["parallaxtoleft",15,3,1,0,"horizontal",!0,!0,37,f,d,1500,1],["parallaxtotop",14,3,1,0,"horizontal",!0,!0,38,f,r,1500,1],["parallaxtobottom",13,3,1,0,"horizontal",!0,!0,39,f,r,1500,1],["scaledownfromright",12,4,1,0,"horizontal",!0,!0,40,f,d,1e3,1],["scaledownfromleft",15,4,1,0,"horizontal",!0,!0,41,f,d,1e3,1],["scaledownfromtop",14,4,1,0,"horizontal",!0,!0,42,f,d,1e3,1],["scaledownfrombottom",13,4,1,0,"horizontal",!0,!0,43,f,d,1e3,1],["zoomout",13,5,1,0,"horizontal",!0,!0,44,f,d,1e3,1],["zoomin",13,6,1,0,"horizontal",!0,!0,45,f,d,1e3,1],["slidingoverlayup",27,0,1,0,"horizontal",!0,!0,47,l,s,2e3,1],["slidingoverlaydown",28,0,1,0,"horizontal",!0,!0,48,l,s,2e3,1],["slidingoverlayright",30,0,1,0,"horizontal",!0,!0,49,l,s,2e3,1],["slidingoverlayleft",29,0,1,0,"horizontal",!0,!0,50,l,s,2e3,1],["parallaxcirclesup",31,0,1,0,"horizontal",!0,!0,51,f,r,1500,1],["parallaxcirclesdown",32,0,1,0,"horizontal",!0,!0,52,f,r,1500,1],["parallaxcirclesright",33,0,1,0,"horizontal",!0,!0,53,f,r,1500,1],["parallaxcirclesleft",34,0,1,0,"horizontal",!0,!0,54,f,r,1500,1],["notransition",26,0,1,0,"horizontal",!0,null,46,f,d,1e3,1],["parallaxright",12,3,1,0,"horizontal",!0,!0,55,f,d,1500,1],["parallaxleft",15,3,1,0,"horizontal",!0,!0,56,f,d,1500,1],["parallaxup",14,3,1,0,"horizontal",!0,!0,57,f,r,1500,1],["parallaxdown",13,3,1,0,"horizontal",!0,!0,58,f,r,1500,1]]);e.duringslidechange=!0,e.testanims=!1,1==e.testanims&&(e.nexttesttransform=void 0===e.nexttesttransform?34:e.nexttesttransform+1,e.nexttesttransform=e.nexttesttransform>70?0:e.nexttesttransform,o=y[e.nexttesttransform][0],console.log(o+"  "+e.nexttesttransform+"  "+y[e.nexttesttransform][1]+"  "+y[e.nexttesttransform][2])),jQuery.each(["parallaxcircles","slidingoverlay","slide","slideover","slideremove","parallax"],function(t,e){o==e+"horizontal"&&(o=1!=i?e+"left":e+"right"),o==e+"vertical"&&(o=1!=i?e+"up":e+"down")}),"random"==o&&(o=Math.round(Math.random()*y.length-1),o>y.length-1&&(o=y.length-1)),"random-static"==o&&(o=Math.round(Math.random()*u.length-1),o>u.length-1&&(o=u.length-1),o=u[o]),"random-premium"==o&&(o=Math.round(Math.random()*g.length-1),o>g.length-1&&(o=g.length-1),o=g[o]);var T=[12,13,14,15,16,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45];if(1==e.isJoomla&&void 0!=window.MooTools&&-1!=T.indexOf(o)){var z=Math.round(Math.random()*(g.length-2))+1;z>g.length-1&&(z=g.length-1),0==z&&(z=1),o=g[z]}n(),w>30&&(w=30),0>w&&(w=0);var L=new Object;return L.nexttrans=w,L.STA=y[m],L.specials=v,L},i=function(t,e){return void 0==e||jQuery.isNumeric(t)?t:void 0==t?t:t.split(",")[e]},n=function(t,e,n,r,s,l,d,h,f){function c(t,e,o,a,i){var n=t.find(".slot"),r=6,s=[2,1.2,.9,.7,.55,.42],l=t.width(),h=t.height();n.wrap('<div class="slot-circle-wrapper" style="overflow:hidden;position:absolute;border:1px solid #fff"></div>');for(var c=0;r>c;c++)n.parent().clone(!1).appendTo(d);t.find(".slot-circle-wrapper").each(function(t){if(r>t){var a=jQuery(this),n=a.find(".slot"),d=l>h?s[t]*l:s[t]*h,c=d,p=0+(c/2-l/2),u=0+(d/2-h/2),g=0!=t?"50%":"0",w=31==o?h/2-d/2:32==o?h/2-d/2:h/2-d/2,v=33==o?l/2-c/2:34==o?l-c:l/2-c/2,m={scale:1,transformOrigo:"50% 50%",width:c+"px",height:d+"px",top:w+"px",left:v+"px",borderRadius:g},x={scale:1,top:h/2-d/2,left:l/2-c/2,ease:i},y=31==o?u:32==o?u:u,T=33==o?p:34==o?p+l/2:p,z={width:l,height:h,autoAlpha:1,top:y+"px",position:"absolute",left:T+"px"},L={top:u+"px",left:p+"px",ease:i},b=e,D=0;f.add(punchgs.TweenLite.fromTo(a,b,m,x),D),f.add(punchgs.TweenLite.fromTo(n,b,z,L),D),f.add(punchgs.TweenLite.fromTo(a,.001,{autoAlpha:0},{autoAlpha:1}),0)}})}var p=l.index(),u=s.index(),g=p>u?1:0;"arrow"==r.sc_indicator&&(g=r.sc_indicator_dir);var w=a(n,r,e,d,g),v=w.STA,m=w.specials,t=w.nexttrans;"on"==d.data("kenburns")&&(t=11);var x=s.data("nexttransid")||0,y=i(s.data("masterspeed"),x);y="default"===y?v[11]:"random"===y?Math.round(1e3*Math.random()+300):void 0!=y?parseInt(y,0):v[11],y=y>r.delay?r.delay:y,y+=v[4],r.slots=i(s.data("slotamount"),x),r.slots=void 0==r.slots||"default"==r.slots?v[12]:"random"==r.slots?Math.round(12*Math.random()+4):r.slots,r.slots=r.slots<1?"boxslide"==e?Math.round(6*Math.random()+3):"flyin"==e?Math.round(4*Math.random()+1):r.slots:r.slots,r.slots=(4==t||5==t||6==t)&&r.slots<3?3:r.slots,r.slots=0!=v[3]?Math.min(r.slots,v[3]):r.slots,r.slots=9==t?r.width/20:10==t?r.height/20:r.slots,r.rotate=i(s.data("rotate"),x),r.rotate=void 0==r.rotate||"default"==r.rotate?0:999==r.rotate||"random"==r.rotate?Math.round(360*Math.random()):r.rotate,r.rotate=!jQuery.support.transition||r.ie||r.ie9?0:r.rotate,11!=t&&(null!=v[7]&&o(h,r,v[7],v[5]),null!=v[6]&&o(d,r,v[6],v[5])),f.add(punchgs.TweenLite.set(d.find(".defaultvid"),{y:0,x:0,top:0,left:0,scale:1}),0),f.add(punchgs.TweenLite.set(h.find(".defaultvid"),{y:0,x:0,top:0,left:0,scale:1}),0),f.add(punchgs.TweenLite.set(d.find(".defaultvid"),{y:"+0%",x:"+0%"}),0),f.add(punchgs.TweenLite.set(h.find(".defaultvid"),{y:"+0%",x:"+0%"}),0),f.add(punchgs.TweenLite.set(d,{autoAlpha:1,y:"+0%",x:"+0%"}),0),f.add(punchgs.TweenLite.set(h,{autoAlpha:1,y:"+0%",x:"+0%"}),0),f.add(punchgs.TweenLite.set(d.parent(),{backgroundColor:"transparent"}),0),f.add(punchgs.TweenLite.set(h.parent(),{backgroundColor:"transparent"}),0);var T=i(s.data("easein"),x),z=i(s.data("easeout"),x);if(T="default"===T?v[9]||punchgs.Power2.easeInOut:T||v[9]||punchgs.Power2.easeInOut,z="default"===z?v[10]||punchgs.Power2.easeInOut:z||v[10]||punchgs.Power2.easeInOut,0==t){var L=Math.ceil(r.height/r.sloth),b=0;d.find(".slotslide").each(function(t){var e=jQuery(this);b+=1,b==L&&(b=0),f.add(punchgs.TweenLite.from(e,y/600,{opacity:0,top:0-r.sloth,left:0-r.slotw,rotation:r.rotate,force3D:"auto",ease:T}),(15*t+30*b)/1500)})}if(1==t){var D,A=0;d.find(".slotslide").each(function(t){var e=jQuery(this),o=Math.random()*y+300,a=500*Math.random()+200;o+a>D&&(D=a+a,A=t),f.add(punchgs.TweenLite.from(e,o/1e3,{autoAlpha:0,force3D:"auto",rotation:r.rotate,ease:T}),a/1e3)})}if(2==t){var j=new punchgs.TimelineLite;h.find(".slotslide").each(function(){var t=jQuery(this);j.add(punchgs.TweenLite.to(t,y/1e3,{left:r.slotw,ease:T,force3D:"auto",rotation:0-r.rotate}),0),f.add(j,0)}),d.find(".slotslide").each(function(){var t=jQuery(this);j.add(punchgs.TweenLite.from(t,y/1e3,{left:0-r.slotw,ease:T,force3D:"auto",rotation:r.rotate}),0),f.add(j,0)})}if(3==t){var j=new punchgs.TimelineLite;h.find(".slotslide").each(function(){var t=jQuery(this);j.add(punchgs.TweenLite.to(t,y/1e3,{top:r.sloth,ease:T,rotation:r.rotate,force3D:"auto",transformPerspective:600}),0),f.add(j,0)}),d.find(".slotslide").each(function(){var t=jQuery(this);j.add(punchgs.TweenLite.from(t,y/1e3,{top:0-r.sloth,rotation:r.rotate,ease:z,force3D:"auto",transformPerspective:600}),0),f.add(j,0)})}if(4==t||5==t){setTimeout(function(){h.find(".defaultimg").css({opacity:0})},100);var k=y/1e3,j=new punchgs.TimelineLite;h.find(".slotslide").each(function(e){var o=jQuery(this),a=e*k/r.slots;5==t&&(a=(r.slots-e-1)*k/r.slots/1.5),j.add(punchgs.TweenLite.to(o,3*k,{transformPerspective:600,force3D:"auto",top:0+r.height,opacity:.5,rotation:r.rotate,ease:T,delay:a}),0),f.add(j,0)}),d.find(".slotslide").each(function(e){var o=jQuery(this),a=e*k/r.slots;5==t&&(a=(r.slots-e-1)*k/r.slots/1.5),j.add(punchgs.TweenLite.from(o,3*k,{top:0-r.height,opacity:.5,rotation:r.rotate,force3D:"auto",ease:punchgs.eo,delay:a}),0),f.add(j,0)})}if(6==t){r.slots<2&&(r.slots=2),r.slots%2&&(r.slots=r.slots+1);var j=new punchgs.TimelineLite;setTimeout(function(){h.find(".defaultimg").css({opacity:0})},100),h.find(".slotslide").each(function(t){var e=jQuery(this);if(t+1<r.slots/2)var o=90*(t+2);else var o=90*(2+r.slots-t);j.add(punchgs.TweenLite.to(e,(y+o)/1e3,{top:0+r.height,opacity:1,force3D:"auto",rotation:r.rotate,ease:T}),0),f.add(j,0)}),d.find(".slotslide").each(function(t){var e=jQuery(this);if(t+1<r.slots/2)var o=90*(t+2);else var o=90*(2+r.slots-t);j.add(punchgs.TweenLite.from(e,(y+o)/1e3,{top:0-r.height,opacity:1,force3D:"auto",rotation:r.rotate,ease:z}),0),f.add(j,0)})}if(7==t){y=2*y,y>r.delay&&(y=r.delay);var j=new punchgs.TimelineLite;setTimeout(function(){h.find(".defaultimg").css({opacity:0})},100),h.find(".slotslide").each(function(){var t=jQuery(this).find("div");j.add(punchgs.TweenLite.to(t,y/1e3,{left:0-r.slotw/2+"px",top:0-r.height/2+"px",width:2*r.slotw+"px",height:2*r.height+"px",opacity:0,rotation:r.rotate,force3D:"auto",ease:T}),0),f.add(j,0)}),d.find(".slotslide").each(function(t){var e=jQuery(this).find("div");j.add(punchgs.TweenLite.fromTo(e,y/1e3,{left:0,top:0,opacity:0,transformPerspective:600},{left:0-t*r.slotw+"px",ease:z,force3D:"auto",top:"0px",width:r.width,height:r.height,opacity:1,rotation:0,delay:.1}),0),f.add(j,0)})}if(8==t){y=3*y,y>r.delay&&(y=r.delay);var j=new punchgs.TimelineLite;h.find(".slotslide").each(function(){var t=jQuery(this).find("div");j.add(punchgs.TweenLite.to(t,y/1e3,{left:0-r.width/2+"px",top:0-r.sloth/2+"px",width:2*r.width+"px",height:2*r.sloth+"px",force3D:"auto",ease:T,opacity:0,rotation:r.rotate}),0),f.add(j,0)}),d.find(".slotslide").each(function(t){var e=jQuery(this).find("div");j.add(punchgs.TweenLite.fromTo(e,y/1e3,{left:0,top:0,opacity:0,force3D:"auto"},{left:"0px",top:0-t*r.sloth+"px",width:d.find(".defaultimg").data("neww")+"px",height:d.find(".defaultimg").data("newh")+"px",opacity:1,ease:z,rotation:0}),0),f.add(j,0)})}if(9==t||10==t){var M=0;d.find(".slotslide").each(function(t){var e=jQuery(this);M++,f.add(punchgs.TweenLite.fromTo(e,y/1e3,{autoAlpha:0,force3D:"auto",transformPerspective:600},{autoAlpha:1,ease:T,delay:5*t/1e3}),0)})}if(27==t||28==t||29==t||30==t){var P=d.find(".slot"),Q=27==t||28==t?1:2,O=27==t||29==t?"-100%":"+100%",I=27==t||29==t?"+100%":"-100%",X=27==t||29==t?"-80%":"80%",Y=27==t||29==t?"80%":"-80%",S=27==t||29==t?"10%":"-10%",_={overwrite:"all"},C={autoAlpha:0,zIndex:1,force3D:"auto",ease:T},V={position:"inherit",autoAlpha:0,overwrite:"all",zIndex:1},Z={autoAlpha:1,force3D:"auto",ease:z},H={overwrite:"all",zIndex:2},J={autoAlpha:1,force3D:"auto",overwrite:"all",ease:T},N={overwrite:"all",zIndex:2},R={autoAlpha:1,force3D:"auto",ease:T},q=1==Q?"y":"x";_[q]="0px",C[q]=O,V[q]=S,Z[q]="0%",H[q]=I,J[q]=O,N[q]=X,R[q]=Y,P.append('<span style="background-color:rgba(0,0,0,0.6);width:100%;height:100%;position:absolute;top:0px;left:0px;display:block;z-index:2"></span>'),f.add(punchgs.TweenLite.fromTo(h,y/1e3,_,C),0),f.add(punchgs.TweenLite.fromTo(d.find(".defaultimg"),y/2e3,V,Z),y/2e3),f.add(punchgs.TweenLite.fromTo(P,y/1e3,H,J),0),f.add(punchgs.TweenLite.fromTo(P.find(".slotslide div"),y/1e3,N,R),0)}if(31==t||32==t||33==t||34==t){y=6e3,T=punchgs.Power3.easeInOut;var B=y/1e3;mas=B-B/5,_nt=t,fy=31==_nt?"+100%":32==_nt?"-100%":"0%",fx=33==_nt?"+100%":34==_nt?"-100%":"0%",ty=31==_nt?"-100%":32==_nt?"+100%":"0%",tx=33==_nt?"-100%":34==_nt?"+100%":"0%",f.add(punchgs.TweenLite.fromTo(h,B-.2*B,{y:0,x:0},{y:ty,x:tx,ease:z}),.2*B),f.add(punchgs.TweenLite.fromTo(d,B,{y:fy,x:fx},{y:"0%",x:"0%",ease:T}),0),d.find(".slot").remove(),d.find(".defaultimg").clone().appendTo(d).addClass("slot"),c(d,B,_nt,"in",T)}if(11==t){m>4&&(m=0);var M=0,E=2==m?"#000000":3==m?"#ffffff":"transparent";switch(m){case 0:f.add(punchgs.TweenLite.fromTo(d,y/1e3,{autoAlpha:0},{autoAlpha:1,force3D:"auto",ease:T}),0);break;case 1:f.add(punchgs.TweenLite.fromTo(d,y/1e3,{autoAlpha:0},{autoAlpha:1,force3D:"auto",ease:T}),0),f.add(punchgs.TweenLite.fromTo(h,y/1e3,{autoAlpha:1},{autoAlpha:0,force3D:"auto",ease:T}),0);break;case 2:case 3:case 4:f.add(punchgs.TweenLite.set(h.parent(),{backgroundColor:E,force3D:"auto"}),0),f.add(punchgs.TweenLite.set(d.parent(),{backgroundColor:"transparent",force3D:"auto"}),0),f.add(punchgs.TweenLite.to(h,y/2e3,{autoAlpha:0,force3D:"auto",ease:T}),0),f.add(punchgs.TweenLite.fromTo(d,y/2e3,{autoAlpha:0},{autoAlpha:1,force3D:"auto",ease:T}),y/2e3)}f.add(punchgs.TweenLite.set(d.find(".defaultimg"),{autoAlpha:1}),0),f.add(punchgs.TweenLite.set(h.find("defaultimg"),{autoAlpha:1}),0)}if(26==t){var M=0;y=0,f.add(punchgs.TweenLite.fromTo(d,y/1e3,{autoAlpha:0},{autoAlpha:1,force3D:"auto",ease:T}),0),f.add(punchgs.TweenLite.to(h,y/1e3,{autoAlpha:0,force3D:"auto",ease:T}),0),f.add(punchgs.TweenLite.set(d.find(".defaultimg"),{autoAlpha:1}),0),f.add(punchgs.TweenLite.set(h.find("defaultimg"),{autoAlpha:1}),0)}if(12==t||13==t||14==t||15==t){y=y,y>r.delay&&(y=r.delay),setTimeout(function(){punchgs.TweenLite.set(h.find(".defaultimg"),{autoAlpha:0})},100);var F=r.width,G=r.height,K=d.find(".slotslide, .defaultvid"),U=0,W=0,$=1,tt=1,et=1,ot=y/1e3,at=ot;("fullwidth"==r.sliderLayout||"fullscreen"==r.sliderLayout)&&(F=K.width(),G=K.height()),12==t?U=F:15==t?U=0-F:13==t?W=G:14==t&&(W=0-G),1==m&&($=0),2==m&&($=0),3==m&&(ot=y/1300),(4==m||5==m)&&(tt=.6),6==m&&(tt=1.4),(5==m||6==m)&&(et=1.4,$=0,F=0,G=0,U=0,W=0),6==m&&(et=.6);7==m&&(F=0,G=0);var it=d.find(".slotslide"),nt=h.find(".slotslide, .defaultvid");if(f.add(punchgs.TweenLite.set(l,{zIndex:15}),0),f.add(punchgs.TweenLite.set(s,{zIndex:20}),0),8==m?(f.add(punchgs.TweenLite.set(l,{zIndex:20}),0),f.add(punchgs.TweenLite.set(s,{zIndex:15}),0),f.add(punchgs.TweenLite.set(it,{left:0,top:0,scale:1,opacity:1,rotation:0,ease:T,force3D:"auto"}),0)):f.add(punchgs.TweenLite.from(it,ot,{left:U,top:W,scale:et,opacity:$,rotation:r.rotate,ease:T,force3D:"auto"}),0),(4==m||5==m)&&(F=0,G=0),1!=m)switch(t){case 12:f.add(punchgs.TweenLite.to(nt,at,{left:0-F+"px",force3D:"auto",scale:tt,opacity:$,rotation:r.rotate,ease:z}),0);break;case 15:f.add(punchgs.TweenLite.to(nt,at,{left:F+"px",force3D:"auto",scale:tt,opacity:$,rotation:r.rotate,ease:z}),0);break;case 13:f.add(punchgs.TweenLite.to(nt,at,{top:0-G+"px",force3D:"auto",scale:tt,opacity:$,rotation:r.rotate,ease:z}),0);break;case 14:f.add(punchgs.TweenLite.to(nt,at,{top:G+"px",force3D:"auto",scale:tt,opacity:$,rotation:r.rotate,ease:z}),0)}}if(16==t){var j=new punchgs.TimelineLite;f.add(punchgs.TweenLite.set(l,{position:"absolute","z-index":20}),0),f.add(punchgs.TweenLite.set(s,{position:"absolute","z-index":15}),0),l.wrapInner('<div class="tp-half-one" style="position:relative; width:100%;height:100%"></div>'),l.find(".tp-half-one").clone(!0).appendTo(l).addClass("tp-half-two"),l.find(".tp-half-two").removeClass("tp-half-one");var F=r.width,G=r.height;"on"==r.autoHeight&&(G=n.height()),l.find(".tp-half-one .defaultimg").wrap('<div class="tp-papercut" style="width:'+F+"px;height:"+G+'px;"></div>'),l.find(".tp-half-two .defaultimg").wrap('<div class="tp-papercut" style="width:'+F+"px;height:"+G+'px;"></div>'),l.find(".tp-half-two .defaultimg").css({position:"absolute",top:"-50%"}),l.find(".tp-half-two .tp-caption").wrapAll('<div style="position:absolute;top:-50%;left:0px;"></div>'),f.add(punchgs.TweenLite.set(l.find(".tp-half-two"),{width:F,height:G,overflow:"hidden",zIndex:15,position:"absolute",top:G/2,left:"0px",transformPerspective:600,transformOrigin:"center bottom"}),0),f.add(punchgs.TweenLite.set(l.find(".tp-half-one"),{width:F,height:G/2,overflow:"visible",zIndex:10,position:"absolute",top:"0px",left:"0px",transformPerspective:600,transformOrigin:"center top"}),0);var rt=(l.find(".defaultimg"),Math.round(20*Math.random()-10)),st=Math.round(20*Math.random()-10),lt=Math.round(20*Math.random()-10),dt=.4*Math.random()-.2,ht=.4*Math.random()-.2,ft=1*Math.random()+1,ct=1*Math.random()+1,pt=.3*Math.random()+.3;f.add(punchgs.TweenLite.set(l.find(".tp-half-one"),{overflow:"hidden"}),0),f.add(punchgs.TweenLite.fromTo(l.find(".tp-half-one"),y/800,{width:F,height:G/2,position:"absolute",top:"0px",left:"0px",force3D:"auto",transformOrigin:"center top"},{scale:ft,rotation:rt,y:0-G-G/4,autoAlpha:0,ease:T}),0),f.add(punchgs.TweenLite.fromTo(l.find(".tp-half-two"),y/800,{width:F,height:G,overflow:"hidden",position:"absolute",top:G/2,left:"0px",force3D:"auto",transformOrigin:"center bottom"},{scale:ct,rotation:st,y:G+G/4,ease:T,autoAlpha:0,onComplete:function(){punchgs.TweenLite.set(l,{position:"absolute","z-index":15}),punchgs.TweenLite.set(s,{position:"absolute","z-index":20}),l.find(".tp-half-one").length>0&&(l.find(".tp-half-one .defaultimg").unwrap(),l.find(".tp-half-one .slotholder").unwrap()),l.find(".tp-half-two").remove()}}),0),j.add(punchgs.TweenLite.set(d.find(".defaultimg"),{autoAlpha:1}),0),null!=l.html()&&f.add(punchgs.TweenLite.fromTo(s,(y-200)/1e3,{scale:pt,x:r.width/4*dt,y:G/4*ht,rotation:lt,force3D:"auto",transformOrigin:"center center",ease:z},{autoAlpha:1,scale:1,x:0,y:0,rotation:0}),0),f.add(j,0)}if(17==t&&d.find(".slotslide").each(function(t){var e=jQuery(this);f.add(punchgs.TweenLite.fromTo(e,y/800,{opacity:0,rotationY:0,scale:.9,rotationX:-110,force3D:"auto",transformPerspective:600,transformOrigin:"center center"},{opacity:1,top:0,left:0,scale:1,rotation:0,rotationX:0,force3D:"auto",rotationY:0,ease:T,delay:.06*t}),0)}),18==t&&d.find(".slotslide").each(function(t){var e=jQuery(this);f.add(punchgs.TweenLite.fromTo(e,y/500,{autoAlpha:0,rotationY:110,scale:.9,rotationX:10,force3D:"auto",transformPerspective:600,transformOrigin:"center center"},{autoAlpha:1,top:0,left:0,scale:1,rotation:0,rotationX:0,force3D:"auto",rotationY:0,ease:T,delay:.06*t}),0)}),19==t||22==t){var j=new punchgs.TimelineLite;f.add(punchgs.TweenLite.set(l,{zIndex:20}),0),f.add(punchgs.TweenLite.set(s,{zIndex:20}),0),setTimeout(function(){h.find(".defaultimg").css({opacity:0})},100);var ut=90,$=1,gt="center center ";1==g&&(ut=-90),19==t?(gt=gt+"-"+r.height/2,$=0):gt+=r.height/2,punchgs.TweenLite.set(n,{transformStyle:"flat",backfaceVisibility:"hidden",transformPerspective:600}),d.find(".slotslide").each(function(t){var e=jQuery(this);j.add(punchgs.TweenLite.fromTo(e,y/1e3,{transformStyle:"flat",backfaceVisibility:"hidden",left:0,rotationY:r.rotate,z:10,top:0,scale:1,force3D:"auto",transformPerspective:600,transformOrigin:gt,rotationX:ut},{left:0,rotationY:0,top:0,z:0,scale:1,force3D:"auto",rotationX:0,delay:50*t/1e3,ease:T}),0),j.add(punchgs.TweenLite.to(e,.1,{autoAlpha:1,delay:50*t/1e3}),0),f.add(j)}),h.find(".slotslide").each(function(t){var e=jQuery(this),o=-90;1==g&&(o=90),j.add(punchgs.TweenLite.fromTo(e,y/1e3,{transformStyle:"flat",backfaceVisibility:"hidden",autoAlpha:1,rotationY:0,top:0,z:0,scale:1,force3D:"auto",transformPerspective:600,transformOrigin:gt,rotationX:0},{autoAlpha:1,rotationY:r.rotate,top:0,z:10,scale:1,rotationX:o,delay:50*t/1e3,force3D:"auto",ease:z}),0),f.add(j)}),f.add(punchgs.TweenLite.set(l,{zIndex:18}),0)}if(20==t){if(setTimeout(function(){h.find(".defaultimg").css({opacity:0})},100),1==g)var wt=-r.width,ut=80,gt="20% 70% -"+r.height/2;else var wt=r.width,ut=-80,gt="80% 70% -"+r.height/2;d.find(".slotslide").each(function(t){var e=jQuery(this),o=50*t/1e3;f.add(punchgs.TweenLite.fromTo(e,y/1e3,{left:wt,rotationX:40,z:-600,opacity:$,top:0,scale:1,force3D:"auto",transformPerspective:600,transformOrigin:gt,transformStyle:"flat",rotationY:ut},{left:0,rotationX:0,opacity:1,top:0,z:0,scale:1,rotationY:0,delay:o,ease:T}),0)}),h.find(".slotslide").each(function(t){var e=jQuery(this),o=50*t/1e3;if(o=t>0?o+y/9e3:0,1!=g)var a=-r.width/2,i=30,n="20% 70% -"+r.height/2;else var a=r.width/2,i=-30,n="80% 70% -"+r.height/2;z=punchgs.Power2.easeInOut,f.add(punchgs.TweenLite.fromTo(e,y/1e3,{opacity:1,rotationX:0,top:0,z:0,scale:1,left:0,force3D:"auto",transformPerspective:600,transformOrigin:n,transformStyle:"flat",rotationY:0},{opacity:1,rotationX:20,top:0,z:-600,left:a,force3D:"auto",rotationY:i,delay:o,ease:z}),0)})}if(21==t||25==t){setTimeout(function(){h.find(".defaultimg").css({opacity:0})},100);var ut=90,wt=-r.width,vt=-ut;if(1==g)if(25==t){var gt="center top 0";ut=r.rotate}else{var gt="left center 0";vt=r.rotate}else if(wt=r.width,ut=-90,25==t){var gt="center bottom 0";vt=-ut,ut=r.rotate}else{var gt="right center 0";vt=r.rotate}d.find(".slotslide").each(function(t){var e=jQuery(this),o=y/1.5/3;f.add(punchgs.TweenLite.fromTo(e,2*o/1e3,{left:0,transformStyle:"flat",rotationX:vt,z:0,autoAlpha:0,top:0,scale:1,force3D:"auto",transformPerspective:1200,transformOrigin:gt,rotationY:ut},{left:0,rotationX:0,top:0,z:0,autoAlpha:1,scale:1,rotationY:0,force3D:"auto",delay:o/1e3,ease:T}),0)}),1!=g?(wt=-r.width,ut=90,25==t?(gt="center top 0",vt=-ut,ut=r.rotate):(gt="left center 0",vt=r.rotate)):(wt=r.width,ut=-90,25==t?(gt="center bottom 0",vt=-ut,ut=r.rotate):(gt="right center 0",vt=r.rotate)),h.find(".slotslide").each(function(t){var e=jQuery(this);f.add(punchgs.TweenLite.fromTo(e,y/1e3,{left:0,transformStyle:"flat",rotationX:0,z:0,autoAlpha:1,top:0,scale:1,force3D:"auto",transformPerspective:1200,transformOrigin:gt,rotationY:0},{left:0,rotationX:vt,top:0,z:0,autoAlpha:1,force3D:"auto",scale:1,rotationY:ut,ease:z}),0)})}if(23==t||24==t){setTimeout(function(){h.find(".defaultimg").css({opacity:0})},100);var ut=-90,$=1,mt=0;if(1==g&&(ut=90),23==t){var gt="center center -"+r.width/2;$=0}else var gt="center center "+r.width/2;punchgs.TweenLite.set(n,{transformStyle:"preserve-3d",backfaceVisibility:"hidden",perspective:2500}),d.find(".slotslide").each(function(t){var e=jQuery(this);f.add(punchgs.TweenLite.fromTo(e,y/1e3,{left:mt,rotationX:r.rotate,force3D:"auto",opacity:$,top:0,scale:1,transformPerspective:1200,transformOrigin:gt,rotationY:ut},{left:0,rotationX:0,autoAlpha:1,top:0,z:0,scale:1,rotationY:0,delay:50*t/500,ease:T}),0)}),ut=90,1==g&&(ut=-90),h.find(".slotslide").each(function(e){var o=jQuery(this);f.add(punchgs.TweenLite.fromTo(o,y/1e3,{left:0,rotationX:0,top:0,z:0,scale:1,force3D:"auto",transformStyle:"flat",transformPerspective:1200,transformOrigin:gt,rotationY:0},{left:mt,rotationX:r.rotate,top:0,scale:1,rotationY:ut,delay:50*e/500,ease:z}),0),23==t&&f.add(punchgs.TweenLite.fromTo(o,y/2e3,{autoAlpha:1},{autoAlpha:0,delay:50*e/500+y/3e3,ease:z}),0)})}return f}}(jQuery);
/********************************************
 * REVOLUTION 5.2 EXTENSION - ACTIONS
 * @version: 1.3.1 (03.03.2016)
 * @requires jquery.themepunch.revolution.js
 * @author ThemePunch
 *********************************************/
! function ($) {
    var _R = jQuery.fn.revolution;
        // _ISM = _R.is_mobile();
    jQuery.extend(!0, _R, {
        checkActions: function (e, t, o) {
            checkActions_intern(e, t, o)
        }
    });
    var checkActions_intern = function (e, t, o) {
            o && jQuery.each(o, function (o, a) {
                a.delay = parseInt(a.delay, 0) / 1e3, e.addClass("noSwipe"), t.fullscreen_esclistener || ("exitfullscreen" == a.action || "togglefullscreen" == a.action) && (jQuery(document).keyup(function (t) {
                    27 == t.keyCode && jQuery("#rs-go-fullscreen").length > 0 && e.trigger(a.event)
                }), t.fullscreen_esclistener = !0);
                var l = "backgroundvideo" == a.layer ? jQuery(".rs-background-video-layer") : "firstvideo" == a.layer ? jQuery(".tp-revslider-slidesli").find(".tp-videolayer") : jQuery("#" + a.layer);
                switch (a.action) {
                    case "togglevideo":
                        jQuery.each(l, function (t, o) {
                            o = jQuery(o);
                            var a = o.data("videotoggledby");
                            void 0 == a && (a = new Array), a.push(e), o.data("videotoggledby", a)
                        });
                        break;
                    case "togglelayer":
                        jQuery.each(l, function (t, o) {
                            o = jQuery(o);
                            var a = o.data("layertoggledby");
                            void 0 == a && (a = new Array), a.push(e), o.data("layertoggledby", a)
                        });
                        break;
                    case "toggle_mute_video":
                        jQuery.each(l, function (t, o) {
                            o = jQuery(o);
                            var a = o.data("videomutetoggledby");
                            void 0 == a && (a = new Array), a.push(e), o.data("videomutetoggledby", a)
                        });
                        break;
                    case "toggle_global_mute_video":
                        jQuery.each(l, function (t, o) {
                            o = jQuery(o);
                            var a = o.data("videomutetoggledby");
                            void 0 == a && (a = new Array), a.push(e), o.data("videomutetoggledby", a)
                        });
                        break;
                    case "toggleslider":
                        void 0 == t.slidertoggledby && (t.slidertoggledby = new Array), t.slidertoggledby.push(e);
                        break;
                    case "togglefullscreen":
                        void 0 == t.fullscreentoggledby && (t.fullscreentoggledby = new Array), t.fullscreentoggledby.push(e)
                }
                switch (e.on(a.event, function () {
                    var o = "backgroundvideo" == a.layer ? jQuery(".active-revslide .slotholder .rs-background-video-layer") : "firstvideo" == a.layer ? jQuery(".active-revslide .tp-videolayer").first() : jQuery("#" + a.layer);
                    if ("stoplayer" == a.action || "togglelayer" == a.action || "startlayer" == a.action) {
                        if (o.length > 0)
                            if ("startlayer" == a.action || "togglelayer" == a.action && "in" != o.data("animdirection")) {
                                o.data("animdirection", "in");
                                var l = o.data("timeline_out"),
                                    i = "carousel" === t.sliderType ? 0 : t.width / 2 - t.gridwidth[t.curWinRange] * t.bw / 2,
                                    r = 0;
                                void 0 != l && l.pause(0).kill(), _R.animateSingleCaption && _R.animateSingleCaption(o, t, i, r, 0, !1, !0);
                                var n = o.data("timeline");
                                o.data("triggerstate", "on"), _R.toggleState(o.data("layertoggledby")), punchgs.TweenLite.delayedCall(a.delay, function () {
                                    n.play(0)
                                }, [n])
                            } else("stoplayer" == a.action || "togglelayer" == a.action && "out" != o.data("animdirection")) && (o.data("animdirection", "out"), o.data("triggered", !0), o.data("triggerstate", "off"), _R.stopVideo && _R.stopVideo(o, t), _R.endMoveCaption && punchgs.TweenLite.delayedCall(a.delay, _R.endMoveCaption, [o, null, null, t]), _R.unToggleState(o.data("layertoggledby")))
                    } else !_ISM || "playvideo" != a.action && "stopvideo" != a.action && "togglevideo" != a.action && "mutevideo" != a.action && "unmutevideo" != a.action && "toggle_mute_video" != a.action && "toggle_global_mute_video" != a.action ? punchgs.TweenLite.delayedCall(a.delay, function () {
                        actionSwitches(o, t, a, e)
                    }, [o, t, a, e]) : actionSwitches(o, t, a, e)
                }), a.action) {
                    case "togglelayer":
                    case "startlayer":
                    case "playlayer":
                    case "stoplayer":
                        var l = jQuery("#" + a.layer);
                        "bytrigger" != l.data("start") && (l.data("triggerstate", "on"), l.data("animdirection", "in"))
                }
            })
        },
        actionSwitches = function (tnc, opt, a, _nc) {
            switch (a.action) {
                case "scrollbelow":
                    _nc.addClass("tp-scrollbelowslider"), _nc.data("scrolloffset", a.offset), _nc.data("scrolldelay", a.delay);
                    var off = getOffContH(opt.fullScreenOffsetContainer) || 0,
                        aof = parseInt(a.offset, 0) || 0;
                    off = off - aof || 0, jQuery("body,html").animate({
                        scrollTop: opt.c.offset().top + jQuery(opt.li[0]).height() - off + "px"
                    }, {
                        duration: 400
                    });
                    break;
                case "callback":
                    eval(a.callback);
                    break;
                case "jumptoslide":
                    switch (a.slide.toLowerCase()) {
                        case "+1":
                        case "next":
                            opt.sc_indicator = "arrow", _R.callingNewSlide(opt, opt.c, 1);
                            break;
                        case "previous":
                        case "prev":
                        case "-1":
                            opt.sc_indicator = "arrow", _R.callingNewSlide(opt, opt.c, -1);
                            break;
                        default:
                            var ts = jQuery.isNumeric(a.slide) ? parseInt(a.slide, 0) : a.slide;
                            _R.callingNewSlide(opt, opt.c, ts)
                    }
                    break;
                case "simplelink":
                    window.open(a.url, a.target);
                    break;
                case "toggleslider":
                    opt.noloopanymore = 0, "playing" == opt.sliderstatus ? (opt.c.revpause(), opt.forcepause_viatoggle = !0, _R.unToggleState(opt.slidertoggledby)) : (opt.forcepause_viatoggle = !1, opt.c.revresume(), _R.toggleState(opt.slidertoggledby));
                    break;
                case "pauseslider":
                    opt.c.revpause(), _R.unToggleState(opt.slidertoggledby);
                    break;
                case "playslider":
                    opt.noloopanymore = 0, opt.c.revresume(), _R.toggleState(opt.slidertoggledby);
                    break;
                case "playvideo":
                    tnc.length > 0 && _R.playVideo(tnc, opt);
                    break;
                case "stopvideo":
                    tnc.length > 0 && _R.stopVideo && _R.stopVideo(tnc, opt);
                    break;
                case "togglevideo":
                    tnc.length > 0 && (_R.isVideoPlaying(tnc, opt) ? _R.stopVideo && _R.stopVideo(tnc, opt) : _R.playVideo(tnc, opt));
                    break;
                case "mutevideo":
                    tnc.length > 0 && _R.muteVideo(tnc, opt);
                    break;
                case "unmutevideo":
                    tnc.length > 0 && _R.unMuteVideo && _R.unMuteVideo(tnc, opt);
                    break;
                case "toggle_mute_video":
                    tnc.length > 0 && (_R.isVideoMuted(tnc, opt) ? _R.unMuteVideo(tnc, opt) : _R.muteVideo && _R.muteVideo(tnc, opt)), _nc.toggleClass("rs-toggle-content-active");
                    break;
                case "toggle_global_mute_video":
                    _nc.hasClass("rs-toggle-content-active") ? (opt.globalmute = !1, void 0 != opt.playingvideos && opt.playingvideos.length > 0 && jQuery.each(opt.playingvideos, function (e, t) {
                        _R.unMuteVideo && _R.unMuteVideo(t, opt)
                    })) : (opt.globalmute = !0, void 0 != opt.playingvideos && opt.playingvideos.length > 0 && jQuery.each(opt.playingvideos, function (e, t) {
                        _R.muteVideo && _R.muteVideo(t, opt)
                    })), _nc.toggleClass("rs-toggle-content-active");
                    break;
                case "simulateclick":
                    tnc.length > 0 && tnc.click();
                    break;
                case "toggleclass":
                    tnc.length > 0 && (tnc.hasClass(a.classname) ? tnc.removeClass(a.classname) : tnc.addClass(a.classname));
                    break;
                case "gofullscreen":
                case "exitfullscreen":
                case "togglefullscreen":
                    if (jQuery("#rs-go-fullscreen").length > 0 && ("togglefullscreen" == a.action || "exitfullscreen" == a.action)) {
                        jQuery("#rs-go-fullscreen").appendTo(jQuery("#rs-was-here"));
                        var paw = opt.c.closest(".forcefullwidth_wrapper_tp_banner").length > 0 ? opt.c.closest(".forcefullwidth_wrapper_tp_banner") : opt.c.closest(".rev_slider_wrapper");
                        paw.unwrap(), paw.unwrap(), opt.minHeight = opt.oldminheight, opt.infullscreenmode = !1, opt.c.revredraw(), void 0 != opt.playingvideos && opt.playingvideos.length > 0 && jQuery.each(opt.playingvideos, function (e, t) {
                            _R.playVideo(t, opt)
                        }), _R.unToggleState(opt.fullscreentoggledby)
                    } else if (0 == jQuery("#rs-go-fullscreen").length && ("togglefullscreen" == a.action || "gofullscreen" == a.action)) {
                        var paw = opt.c.closest(".forcefullwidth_wrapper_tp_banner").length > 0 ? opt.c.closest(".forcefullwidth_wrapper_tp_banner") : opt.c.closest(".rev_slider_wrapper");
                        paw.wrap('<div id="rs-was-here"><div id="rs-go-fullscreen"></div></div>');
                        var gf = jQuery("#rs-go-fullscreen");
                        gf.appendTo(jQuery("body")), gf.css({
                            position: "fixed",
                            width: "100%",
                            height: "100%",
                            top: "0px",
                            left: "0px",
                            zIndex: "9999999",
                            background: "#ffffff"
                        }), opt.oldminheight = opt.minHeight, opt.minHeight = jQuery(window).height(), opt.infullscreenmode = !0, opt.c.revredraw(), void 0 != opt.playingvideos && opt.playingvideos.length > 0 && jQuery.each(opt.playingvideos, function (e, t) {
                            _R.playVideo(t, opt)
                        }), _R.toggleState(opt.fullscreentoggledby)
                    }
            }
        },
        getOffContH = function (e) {
            if (void 0 == e) return 0;
            if (e.split(",").length > 1) {
                oc = e.split(",");
                var t = 0;
                return oc && jQuery.each(oc, function (e, o) {
                    jQuery(o).length > 0 && (t += jQuery(o).outerHeight(!0))
                }), t
            }
            return jQuery(e).height()
        }
}(jQuery);

/************************************************
 * REVOLUTION 5.2 EXTENSION - LAYER ANIMATION
 * @version: 2.2.1 (23.03.2016)
 * @requires jquery.themepunch.revolution.js
 * @author ThemePunch
 ************************************************/

! function (a) {
    function e(a, e, t, i, n, o, r) {
        var d = a.find(e);
        d.css("borderWidth", o + "px"), d.css(t, 0 - o + "px"), d.css(i, "0px solid transparent"), d.css(n, r)
    }
    // var t = jQuery.fn.revolution;
    // t.is_mobile();
    var t = jQuery.fn.revolution;
    // t.is_mobile();
    jQuery.extend(!0, t, {
        animcompleted: function (a, e) {
            var i = a.data("videotype"),
                n = a.data("autoplay"),
                o = a.data("autoplayonlyfirsttime");
            void 0 != i && "none" != i && (1 == n || "true" == n || "on" == n || "1sttime" == n || o ? (t.playVideo(a, e), t.toggleState(a.data("videotoggledby")), (o || "1sttime" == n) && (a.data("autoplayonlyfirsttime", !1), a.data("autoplay", "off"))) : ("no1sttime" == n && a.data("autoplay", "on"), t.unToggleState(a.data("videotoggledby"))))
        },
        handleStaticLayers: function (a, e) {
            var t = parseInt(a.data("startslide"), 0),
                i = parseInt(a.data("endslide"), 0);
            0 > t && (t = 0), 0 > i && (i = e.slideamount), 0 === t && i === e.slideamount - 1 && (i = e.slideamount + 1), a.data("startslide", t), a.data("endslide", i)
        },
        animateTheCaptions: function (a, e, i, n) {
            var o = "carousel" === e.sliderType ? 0 : e.width / 2 - e.gridwidth[e.curWinRange] * e.bw / 2,
                r = 0,
                d = a.data("index");
            e.layers = e.layers || new Object, e.layers[d] = e.layers[d] || a.find(".tp-caption"), e.layers["static"] = e.layers["static"] || e.c.find(".tp-static-layers").find(".tp-caption");
            var s = new Array;
            if (e.conh = e.c.height(), e.conw = e.c.width(), e.ulw = e.ul.width(), e.ulh = e.ul.height(), e.debugMode) {
                a.addClass("indebugmode"), a.find(".helpgrid").remove(), e.c.find(".hglayerinfo").remove(), a.append('<div class="helpgrid" style="width:' + e.gridwidth[e.curWinRange] * e.bw + "px;height:" + e.gridheight[e.curWinRange] * e.bw + 'px;"></div>');
                var l = a.find(".helpgrid");
                l.append('<div class="hginfo">Zoom:' + Math.round(100 * e.bw) + "% &nbsp;&nbsp;&nbsp; Device Level:" + e.curWinRange + "&nbsp;&nbsp;&nbsp; Grid Preset:" + e.gridwidth[e.curWinRange] + "x" + e.gridheight[e.curWinRange] + "</div>"), e.c.append('<div class="hglayerinfo"></div>'), l.append('<div class="tlhg"></div>')
            }
            s && jQuery.each(s, function (a) {
                var e = jQuery(this);
                punchgs.TweenLite.set(e.find(".tp-videoposter"), {
                    autoAlpha: 1
                }), punchgs.TweenLite.set(e.find("iframe"), {
                    autoAlpha: 0
                })
            }), e.layers[d] && jQuery.each(e.layers[d], function (a, e) {
                s.push(e)
            }), e.layers["static"] && jQuery.each(e.layers["static"], function (a, e) {
                s.push(e)
            }), s && jQuery.each(s, function (a) {
                t.animateSingleCaption(jQuery(this), e, o, r, a, i)
            });
            var p = jQuery("body").find("#" + e.c.attr("id")).find(".tp-bannertimer");
            p.data("opt", e), void 0 != n && setTimeout(function () {
                n.resume()
            }, 30)
        },
        animateSingleCaption: function (a, r, s, f, b, x, T) {
            var L = x,
                W = g(a, r, "in", !0),
                j = a.data("_pw") || a.closest(".tp-parallax-wrap"),
                C = a.data("_lw") || a.closest(".tp-loop-wrap"),
                R = a.data("_mw") || a.closest(".tp-mask-wrap"),
                k = a.data("responsive") || "on",
                I = a.data("responsive_offset") || "on",
                _ = a.data("basealign") || "grid",
                Q = "grid" === _ ? r.width : r.ulw,
                S = "grid" === _ ? r.height : r.ulh,
                z = jQuery("body").hasClass("rtl");
            if (a.data("_pw") || (a.data("staticlayer") ? a.data("_li", a.closest(".tp-static-layers")) : a.data("_li", a.closest(".tp-revslider-slidesli")), a.data("slidelink", a.hasClass("slidelink")), a.data("_pw", j), a.data("_lw", C), a.data("_mw", R)), "fullscreen" == r.sliderLayout && (f = S / 2 - r.gridheight[r.curWinRange] * r.bh / 2), ("on" == r.autoHeight || void 0 != r.minHeight && r.minHeight > 0) && (f = r.conh / 2 - r.gridheight[r.curWinRange] * r.bh / 2), 0 > f && (f = 0), r.debugMode) {
                a.closest("li").find(".helpgrid").css({
                    top: f + "px",
                    left: s + "px"
                });
                var M = r.c.find(".hglayerinfo");
                a.on("hover, mouseenter", function () {
                    var e = "";
                    a.data() && jQuery.each(a.data(), function (a, t) {
                        "object" != typeof t && (e = e + '<span style="white-space:nowrap"><span style="color:#27ae60">' + a + ":</span>" + t + "</span>&nbsp; &nbsp; ")
                    }), M.html(e)
                })
            }
            var O = c(a.data("visibility"), r)[r.forcedWinRange] || c(a.data("visibility"), r) || "on";
            if ("off" == O || Q < r.hideCaptionAtLimit && "on" == a.data("captionhidden") || Q < r.hideAllCaptionAtLimit ? a.addClass("tp-hidden-caption") : a.removeClass("tp-hidden-caption"), a.data("layertype", "html"), 0 > s && (s = 0), void 0 != a.data("thumbimage") && void 0 == a.data("videoposter") && a.data("videoposter", a.data("thumbimage")), a.find("img").length > 0) {
                var H = a.find("img");
                a.data("layertype", "image"), 0 == H.width() && H.css({
                    width: "auto"
                }), 0 == H.height() && H.css({
                    height: "auto"
                }), void 0 == H.data("ww") && H.width() > 0 && H.data("ww", H.width()), void 0 == H.data("hh") && H.height() > 0 && H.data("hh", H.height());
                var B = H.data("ww"),
                    A = H.data("hh"),
                    D = "slide" == _ ? r.ulw : r.gridwidth[r.curWinRange],
                    F = "slide" == _ ? r.ulh : r.gridheight[r.curWinRange],
                    B = c(H.data("ww"), r)[r.curWinRange] || c(H.data("ww"), r) || "auto",
                    A = c(H.data("hh"), r)[r.curWinRange] || c(H.data("hh"), r) || "auto",
                    P = "full" === B || "full-proportional" === B,
                    X = "full" === A || "full-proportional" === A;
                if ("full-proportional" === B) {
                    var Y = H.data("owidth"),
                        V = H.data("oheight");
                    V / F > Y / D ? (B = D, A = V * (D / Y)) : (A = F, B = Y * (F / V))
                } else B = P ? D : parseFloat(B), A = X ? F : parseFloat(A);
                void 0 == B && (B = 0), void 0 == A && (A = 0), "off" !== k ? ("grid" != _ && P ? H.width(B) : H.width(B * r.bw), "grid" != _ && X ? H.height(A) : H.height(A * r.bh)) : (H.width(B), H.height(A))
            }
            "slide" === _ && (s = 0, f = 0);
            var N = "html5" == a.data("audio") ? "audio" : "video";
            if (a.hasClass("tp-videolayer") || a.hasClass("tp-audiolayer") || a.find("iframe").length > 0 || a.find(N).length > 0) {
                if (a.data("layertype", "video"), t.manageVideoLayer && t.manageVideoLayer(a, r, x, L), !x && !L) {
                    a.data("videotype");
                    t.resetVideo && t.resetVideo(a, r)
                }
                var $ = a.data("aspectratio");
                void 0 != $ && $.split(":").length > 1 && t.prepareCoveredVideo($, r, a);
                var H = a.find("iframe") ? a.find("iframe") : H = a.find(N),
                    Z = a.find("iframe") ? !1 : !0,
                    G = a.hasClass("coverscreenvideo");
                H.css({
                    display: "block"
                }), void 0 == a.data("videowidth") && (a.data("videowidth", H.width()), a.data("videoheight", H.height()));
                var U, B = c(a.data("videowidth"), r)[r.curWinRange] || c(a.data("videowidth"), r) || "auto",
                    A = c(a.data("videoheight"), r)[r.curWinRange] || c(a.data("videoheight"), r) || "auto";
                B = parseFloat(B), A = parseFloat(A), void 0 === a.data("cssobj") && (U = v(a, 0), a.data("cssobj", U));
                var q = u(a.data("cssobj"), r);
                if ("auto" == q.lineHeight && (q.lineHeight = q.fontSize + 4), a.hasClass("fullscreenvideo") || G) {
                    s = 0, f = 0, a.data("x", 0), a.data("y", 0);
                    var E = S;
                    "on" == r.autoHeight && (E = r.conh), a.css({
                        width: Q,
                        height: E
                    })
                } else punchgs.TweenLite.set(a, {
                    paddingTop: Math.round(q.paddingTop * r.bh) + "px",
                    paddingBottom: Math.round(q.paddingBottom * r.bh) + "px",
                    paddingLeft: Math.round(q.paddingLeft * r.bw) + "px",
                    paddingRight: Math.round(q.paddingRight * r.bw) + "px",
                    marginTop: q.marginTop * r.bh + "px",
                    marginBottom: q.marginBottom * r.bh + "px",
                    marginLeft: q.marginLeft * r.bw + "px",
                    marginRight: q.marginRight * r.bw + "px",
                    borderTopWidth: Math.round(q.borderTopWidth * r.bh) + "px",
                    borderBottomWidth: Math.round(q.borderBottomWidth * r.bh) + "px",
                    borderLeftWidth: Math.round(q.borderLeftWidth * r.bw) + "px",
                    borderRightWidth: Math.round(q.borderRightWidth * r.bw) + "px",
                    width: B * r.bw + "px",
                    height: A * r.bh + "px"
                });
                (0 == Z && !G || 1 != a.data("forcecover") && !a.hasClass("fullscreenvideo") && !G) && (H.width(B * r.bw), H.height(A * r.bh))
            }
            var J = a.data("slidelink") || !1;
            a.find(".tp-resizeme, .tp-resizeme *").each(function () {
                w(jQuery(this), r, "rekursive", k)
            }), a.hasClass("tp-resizeme") && a.find("*").each(function () {
                w(jQuery(this), r, "rekursive", k)
            }), w(a, r, 0, k);
            var K = a.outerHeight(),
                aa = a.css("backgroundColor");
            e(a, ".frontcorner", "left", "borderRight", "borderTopColor", K, aa), e(a, ".frontcornertop", "left", "borderRight", "borderBottomColor", K, aa), e(a, ".backcorner", "right", "borderLeft", "borderBottomColor", K, aa), e(a, ".backcornertop", "right", "borderLeft", "borderTopColor", K, aa), "on" == r.fullScreenAlignForce && (s = 0, f = 0);
            var ea = a.data("arrobj");
            if (void 0 === ea) {
                var ea = new Object;
                ea.voa = c(a.data("voffset"), r)[r.curWinRange] || c(a.data("voffset"), r)[0], ea.hoa = c(a.data("hoffset"), r)[r.curWinRange] || c(a.data("hoffset"), r)[0], ea.elx = c(a.data("x"), r)[r.curWinRange] || c(a.data("x"), r)[0], ea.ely = c(a.data("y"), r)[r.curWinRange] || c(a.data("y"), r)[0]
            }
            var ta = 0 == ea.voa.length ? 0 : ea.voa,
                ia = 0 == ea.hoa.length ? 0 : ea.hoa,
                na = 0 == ea.elx.length ? 0 : ea.elx,
                oa = 0 == ea.ely.length ? 0 : ea.ely,
                ra = a.outerWidth(!0),
                da = a.outerHeight(!0);
            0 == ra && 0 == da && (ra = r.ulw, da = r.ulh);
            var sa = "off" !== I ? parseInt(ta, 0) * r.bw : parseInt(ta, 0),
                la = "off" !== I ? parseInt(ia, 0) * r.bw : parseInt(ia, 0),
                pa = "grid" === _ ? r.gridwidth[r.curWinRange] * r.bw : Q,
                ha = "grid" === _ ? r.gridheight[r.curWinRange] * r.bw : S;
            "on" == r.fullScreenAlignForce && (pa = r.ulw, ha = r.ulh), na = "center" === na || "middle" === na ? pa / 2 - ra / 2 + la : "left" === na ? la : "right" === na ? pa - ra - la : "off" !== I ? na * r.bw : na, oa = "center" == oa || "middle" == oa ? ha / 2 - da / 2 + sa : "top" == oa ? sa : "bottom" == oa ? ha - da - sa : "off" !== I ? oa * r.bw : oa, z && !J && (na += ra), J && (na = 0);
            var ca = a.data("lasttriggerstate"),
                ga = a.data("triggerstate"),
                ma = void 0 != a.data("start") ? a.data("start") : 100,
                va = a.data("end"),
                ua = T ? 0 : "bytrigger" === ma || "sliderenter" === ma ? 0 : parseFloat(ma) / 1e3,
                fa = na + s,
                wa = oa + f,
                ya = a.css("z-Index");
            T || ("reset" == ca && "bytrigger" != ma ? (a.data("triggerstate", "on"), a.data("animdirection", "in"), ga = "on") : "reset" == ca && "bytrigger" == ma && (a.data("triggerstate", "off"), a.data("animdirection", "out"), ga = "off")), punchgs.TweenLite.set(j, {
                zIndex: ya,
                top: wa,
                left: fa,
                overwrite: "auto"
            }), 0 == W && (L = !0), void 0 == a.data("timeline") || L || (2 != W && a.data("timeline").gotoAndPlay(0), L = !0), !x && a.data("timeline_out") && 2 != W && 0 != W && (a.data("timeline_out").kill(), a.data("outstarted", 0)), T && void 0 != a.data("timeline") && (a.removeData("$anims"), a.data("timeline").pause(0), a.data("timeline").kill(), void 0 != a.data("newhoveranim") && (a.data("newhoveranim").progress(0), a.data("newhoveranim").kill()), a.removeData("timeline"), punchgs.TweenLite.killTweensOf(a), a.unbind("hover"), a.removeClass("rs-hover-ready"), a.removeData("newhoveranim"));
            var ba = a.data("timeline") ? a.data("timeline").time() : 0,
                xa = void 0 !== a.data("timeline") ? a.data("timeline").progress() : 0,
                Ta = a.data("timeline") || new punchgs.TimelineLite({
                    smoothChildTiming: !0
                });
            xa = jQuery.isNumeric(xa) ? xa : 0, Ta.pause();
            var La = {};
            if (La.svg = void 0 != a.data("svg_src") ? a.find("svg") : !1, 1 > xa && 1 != a.data("outstarted") || 2 == W || T) {
                var Wa = a;
                if (void 0 != a.data("mySplitText") && a.data("mySplitText").revert(), void 0 != a.data("splitin") && a.data("splitin").match(/chars|words|lines/g) || void 0 != a.data("splitout") && a.data("splitout").match(/chars|words|lines/g)) {
                    var ja = a.find("a").length > 0 ? a.find("a") : a;
                    a.data("mySplitText", new punchgs.SplitText(ja, {
                        type: "lines,words,chars",
                        charsClass: "tp-splitted tp-charsplit",
                        wordsClass: "tp-splitted tp-wordsplit",
                        linesClass: "tp-splitted tp-linesplit"
                    })), a.addClass("splitted")
                }
                void 0 !== a.data("mySplitText") && a.data("splitin") && a.data("splitin").match(/chars|words|lines/g) && (Wa = a.data("mySplitText")[a.data("splitin")]);
                var Ca = new Object;
                La.svg && (La.idle = o(a.data("svg_idle"), n()), punchgs.TweenLite.set(La.svg, La.idle.anim));
                var Ra = void 0 != a.data("transform_in") ? a.data("transform_in").match(/\(R\)/gi) : !1;
                if (!a.data("$anims") || T || Ra) {
                    var ka = i(),
                        Ia = i(),
                        _a = d(),
                        Qa = void 0 !== a.data("transform_hover") || void 0 !== a.data("style_hover");
                    Ia = p(Ia, a.data("transform_idle")), ka = p(Ia, a.data("transform_in"), 1 == r.sdir), Qa && (_a = p(_a, a.data("transform_hover")), _a = m(_a, a.data("style_hover")), La.svg && ($svghover = o(a.data("svg_hover"), n()), void 0 != _a.anim.color && ($svghover.anim.fill = _a.anim.color), a.data("hoversvg", $svghover)), a.data("hover", _a)), ka.elemdelay = void 0 == a.data("elementdelay") ? 0 : a.data("elementdelay"), Ia.anim.ease = ka.anim.ease = ka.anim.ease || punchgs.Power1.easeInOut, Qa && !a.hasClass("rs-hover-ready") && (a.addClass("rs-hover-ready"), a.hover(function (a) {
                        var e = jQuery(a.currentTarget),
                            t = e.data("hover"),
                            i = e.data("timeline");
                        i && 1 == i.progress() && (void 0 === e.data("newhoveranim") || "none" === e.data("newhoveranim") ? (e.data("newhoveranim", punchgs.TweenLite.to(e, t.speed, t.anim)), La.svg && e.data("newsvghoveranim", punchgs.TweenLite.to(La.svg, t.speed, e.data("hoversvg").anim))) : (e.data("newhoveranim").progress(0), e.data("newhoveranim").play(), La.svg && e.data("newsvghoveranim").progress(0).play()))
                    }, function (a) {
                        var e = jQuery(a.currentTarget),
                            t = e.data("timeline");
                        t && 1 == t.progress() && void 0 != e.data("newhoveranim") && (e.data("newhoveranim").reverse(), La.svg && e.data("newsvghoveranim").reverse())
                    })), Ca = new Object, Ca.f = ka, Ca.r = Ia, a.data("$anims")
                } else Ca = a.data("$anims");
                var Sa = h(a.data("mask_in")),
                    za = new punchgs.TimelineLite;
                if (Ca.f.anim.x = Ca.f.anim.x * r.bw || l(Ca.f.anim.x, r, ra, da, wa, fa, "horizontal"), Ca.f.anim.y = Ca.f.anim.y * r.bw || l(Ca.f.anim.y, r, ra, da, wa, fa, "vertical"), 2 != W || T) {
                    if (Wa != a) {
                        var Ma = Ca.r.anim.ease;
                        Ta.add(punchgs.TweenLite.set(a, Ca.r.anim)), Ca.r = i(), Ca.r.anim.ease = Ma
                    }
                    if (Ca.f.anim.visibility = "hidden", a.data("eow", ra), a.data("eoh", da), a.data("speed", Ca.f.speed), a.data("ease", Ca.r.anim.ease), za.eventCallback("onStart", function () {
                            punchgs.TweenLite.set(a, {
                                visibility: "visible"
                            }), a.data("iframes") && a.find("iframe").each(function () {
                                punchgs.TweenLite.set(jQuery(this), {
                                    autoAlpha: 1
                                })
                            }), punchgs.TweenLite.set(j, {
                                visibility: "visible"
                            });
                            var e = {};
                            e.layer = a, e.eventtype = "enterstage", e.layertype = a.data("layertype"), a.data("active", !0), e.layersettings = a.data(), r.c.trigger("revolution.layeraction", [e])
                        }), za.eventCallback("onComplete", function () {
                            var e = {};
                            e.layer = a, e.eventtype = "enteredstage", e.layertype = a.data("layertype"), e.layersettings = a.data(), r.c.trigger("revolution.layeraction", [e]), t.animcompleted(a, r)
                        }), "sliderenter" == ma && r.overcontainer && (ua = .6), Ta.add(za.staggerFromTo(Wa, Ca.f.speed, Ca.f.anim, Ca.r.anim, Ca.f.elemdelay), ua), Sa) {
                        var Oa = new Object;
                        Oa.ease = Ca.r.anim.ease, Oa.overflow = Sa.anim.overflow = "hidden", Oa.overwrite = "all", Oa.x = Oa.y = 0, Sa.anim.x = Sa.anim.x * r.bw || l(Sa.anim.x, r, ra, da, wa, fa, "horizontal"), Sa.anim.y = Sa.anim.y * r.bw || l(Sa.anim.y, r, ra, da, wa, fa, "vertical"), Ta.add(punchgs.TweenLite.fromTo(R, Ca.f.speed, Sa.anim, Oa, ka.elemdelay), ua)
                    } else Ta.add(punchgs.TweenLite.set(R, {
                        overflow: "visible"
                    }, ka.elemdelay), 0)
                }
                if (a.data("timeline", Ta), r.sliderscrope = void 0 === r.sliderscrope ? Math.round(99999 * Math.random()) : r.sliderscrope, W = g(a, r, "in"), void 0 === r.endtimeouts && (r.endtimeouts = []), (0 === xa || 2 == W) && "bytrigger" !== va && !T && "sliderleave" != va) {
                    if (void 0 != va && (-1 == W || 2 == W) && "bytriger" !== va) var Ha = setTimeout(function () {
                        t.endMoveCaption(a, R, j, r)
                    }, parseInt(a.data("end"), 0));
                    r.endtimeouts.push(Ha)
                }
                Ta = a.data("timeline"), "on" == a.data("loopanimation") && y(C, r.bw), ("sliderenter" != ma || "sliderenter" == ma && r.overcontainer) && (-1 == W || 1 == W || T || 0 == W && 1 > xa && a.hasClass("rev-static-visbile")) && (1 > xa && xa > 0 || 0 == xa && "bytrigger" != ma && "keep" != ca || 0 == xa && "bytrigger" != ma && "keep" == ca && "on" == ga || "bytrigger" == ma && "keep" == ca && "on" == ga) && (Ta.resume(ba), t.toggleState(a.data("layertoggledby")))
            }
            "on" == a.data("loopanimation") && punchgs.TweenLite.set(C, {
                minWidth: ra,
                minHeight: da
            }), 0 == a.data("slidelink") || 1 != a.data("slidelink") && !a.hasClass("slidelink") ? (punchgs.TweenLite.set(R, {
                width: "auto",
                height: "auto"
            }), a.data("slidelink", 0)) : (punchgs.TweenLite.set(R, {
                width: "100%",
                height: "100%"
            }), a.data("slidelink", 1))
        },
        endMoveCaption: function (a, e, n, o) {
            if (e = void 0 != e ? e : a.data("_mw"), n = void 0 != n ? n : a.data("_pw"), a.data("outstarted", 1), a.data("timeline")) a.data("timeline").pause();
            else if (void 0 === a.data("_pw")) return;
            var d = new punchgs.TimelineLite,
                s = new punchgs.TimelineLite,
                c = new punchgs.TimelineLite,
                g = p(i(), a.data("transform_in"), 1 == o.sdir),
                m = a.data("transform_out") ? p(r(), a.data("transform_out"), 1 == o.sdir) : p(r(), a.data("transform_in"), 1 == o.sdir),
                v = a.data("splitout") && a.data("splitout").match(/words|chars|lines/g) ? a.data("mySplitText")[a.data("splitout")] : a,
                u = void 0 == a.data("endelementdelay") ? 0 : a.data("endelementdelay"),
                f = a.innerWidth(),
                w = a.innerHeight(),
                y = n.position();
            a.data("transform_out") && a.data("transform_out").match(/auto:auto/g) && (g.speed = m.speed, g.anim.ease = m.anim.ease, m = g);
            var b = h(a.data("mask_out"));
            m.anim.x = m.anim.x * o.bw || l(m.anim.x, o, f, w, y.top, y.left, "horizontal"), m.anim.y = m.anim.y * o.bw || l(m.anim.y, o, f, w, y.top, y.left, "vertical"), s.eventCallback("onStart", function () {
                var e = {};
                e.layer = a, e.eventtype = "leavestage", e.layertype = a.data("layertype"), e.layersettings = a.data(), a.data("active", !1), o.c.trigger("revolution.layeraction", [e])
            }), s.eventCallback("onComplete", function () {
                punchgs.TweenLite.set(a, {
                    visibility: "hidden"
                }), punchgs.TweenLite.set(n, {
                    visibility: "hidden"
                });
                var e = {};
                e.layer = a, e.eventtype = "leftstage", a.data("active", !1), e.layertype = a.data("layertype"), e.layersettings = a.data(), o.c.trigger("revolution.layeraction", [e]), t.stopVideo && t.stopVideo(a, o)
            }), d.add(s.staggerTo(v, m.speed, m.anim, u), 0), b ? (b.anim.ease = m.anim.ease, b.anim.overflow = "hidden", b.anim.x = b.anim.x * o.bw || l(b.anim.x, o, f, w, y.top, y.left, "horizontal"), b.anim.y = b.anim.y * o.bw || l(b.anim.y, o, f, w, y.top, y.left, "vertical"), d.add(c.to(e, m.speed, b.anim, u), 0)) : d.add(c.set(e, {
                overflow: "visible",
                overwrite: "auto"
            }, u), 0), a.data("timeline_out", d)
        },
        removeTheCaptions: function (a, e) {
            var i = a.data("index"),
                n = new Array;
            e.layers[i] && jQuery.each(e.layers[i], function (a, e) {
                n.push(e)
            }), e.layers["static"] && jQuery.each(e.layers["static"], function (a, e) {
                n.push(e)
            }), e.endtimeouts && e.endtimeouts.length > 0 && jQuery.each(e.endtimeouts, function (a, e) {
                clearTimeout(e)
            }), e.endtimeouts = new Array, n && jQuery.each(n, function (a) {
                var i = jQuery(this),
                    n = g(i, e, "out");
                0 != n && (b(i), clearTimeout(i.data("videoplaywait")), t.stopVideo && t.stopVideo(i, e), t.endMoveCaption(i, null, null, e), t.removeMediaFromList && t.removeMediaFromList(i, e), e.lastplayedvideos = [])
            })
        }
    });
    var i = function () {
            var a = new Object;
            return a.anim = new Object, a.anim.x = 0, a.anim.y = 0, a.anim.z = 0, a.anim.rotationX = 0, a.anim.rotationY = 0, a.anim.rotationZ = 0, a.anim.scaleX = 1, a.anim.scaleY = 1, a.anim.skewX = 0, a.anim.skewY = 0, a.anim.opacity = 1, a.anim.transformOrigin = "50% 50%", a.anim.transformPerspective = 600, a.anim.rotation = 0, a.anim.ease = punchgs.Power3.easeOut, a.anim.force3D = "auto", a.speed = .3, a.anim.autoAlpha = 1, a.anim.visibility = "visible", a.anim.overwrite = "all", a
        },
        n = function () {
            var a = new Object;
            return a.anim = new Object, a.anim.stroke = "none", a.anim.strokeWidth = 0, a.anim.strokeDasharray = "none", a.anim.strokeDashoffset = "0", a
        },
        o = function (a, e) {
            var t = a.split(";");
            return t && jQuery.each(t, function (a, t) {
                var i = t.split(":"),
                    n = i[0],
                    o = i[1];
                "sc" == n && (e.anim.stroke = o), "sw" == n && (e.anim.strokeWidth = o), "sda" == n && (e.anim.strokeDasharray = o), "sdo" == n && (e.anim.strokeDashoffset = o)
            }), e
        },
        r = function () {
            var a = new Object;
            return a.anim = new Object, a.anim.x = 0, a.anim.y = 0, a.anim.z = 0, a
        },
        d = function () {
            var a = new Object;
            return a.anim = new Object, a.speed = .2, a
        },
        s = function (a, e) {
            if (jQuery.isNumeric(parseFloat(a))) return parseFloat(a);
            if (void 0 === a || "inherit" === a) return e;
            if (a.split("{").length > 1) {
                var t = a.split(","),
                    i = parseFloat(t[1].split("}")[0]);
                t = parseFloat(t[0].split("{")[1]), a = Math.random() * (i - t) + t
            }
            return a
        },
        l = function (a, e, t, i, n, o, r) {
            return !jQuery.isNumeric(a) && a.match(/%]/g) ? (a = a.split("[")[1].split("]")[0], "horizontal" == r ? a = (t + 2) * parseInt(a, 0) / 100 : "vertical" == r && (a = (i + 2) * parseInt(a, 0) / 100)) : (a = "layer_left" === a ? 0 - t : "layer_right" === a ? t : a, a = "layer_top" === a ? 0 - i : "layer_bottom" === a ? i : a, a = "left" === a || "stage_left" === a ? 0 - t - o : "right" === a || "stage_right" === a ? e.conw - o : "center" === a || "stage_center" === a ? e.conw / 2 - t / 2 - o : a, a = "top" === a || "stage_top" === a ? 0 - i - n : "bottom" === a || "stage_bottom" === a ? e.conh - n : "middle" === a || "stage_middle" === a ? e.conh / 2 - i / 2 - n : a), a
        },
        p = function (a, e, t) {
            var i = new Object;
            if (i = jQuery.extend(!0, {}, i, a), void 0 === e) return i;
            var n = e.split(";");
            return n && jQuery.each(n, function (a, e) {
                var n = e.split(":"),
                    o = n[0],
                    r = n[1];
                t && void 0 != r && r.length > 0 && r.match(/\(R\)/) && (r = r.replace("(R)", ""), r = "right" === r ? "left" : "left" === r ? "right" : "top" === r ? "bottom" : "bottom" === r ? "top" : r, "[" === r[0] && "-" === r[1] ? r = r.replace("[-", "[") : "[" === r[0] && "-" !== r[1] ? r = r.replace("[", "[-") : "-" === r[0] ? r = r.replace("-", "") : r[0].match(/[1-9]/) && (r = "-" + r)), void 0 != r && (r = r.replace(/\(R\)/, ""), ("rotationX" == o || "rX" == o) && (i.anim.rotationX = s(r, i.anim.rotationX) + "deg"), ("rotationY" == o || "rY" == o) && (i.anim.rotationY = s(r, i.anim.rotationY) + "deg"), ("rotationZ" == o || "rZ" == o) && (i.anim.rotation = s(r, i.anim.rotationZ) + "deg"), ("scaleX" == o || "sX" == o) && (i.anim.scaleX = s(r, i.anim.scaleX)), ("scaleY" == o || "sY" == o) && (i.anim.scaleY = s(r, i.anim.scaleY)), ("opacity" == o || "o" == o) && (i.anim.opacity = s(r, i.anim.opacity)), i.anim.opacity = 0 == i.anim.opacity ? 1e-4 : i.anim.opacity, ("skewX" == o || "skX" == o) && (i.anim.skewX = s(r, i.anim.skewX)), ("skewY" == o || "skY" == o) && (i.anim.skewY = s(r, i.anim.skewY)), "x" == o && (i.anim.x = s(r, i.anim.x)), "y" == o && (i.anim.y = s(r, i.anim.y)), "z" == o && (i.anim.z = s(r, i.anim.z)), ("transformOrigin" == o || "tO" == o) && (i.anim.transformOrigin = r.toString()), ("transformPerspective" == o || "tP" == o) && (i.anim.transformPerspective = parseInt(r, 0)), ("speed" == o || "s" == o) && (i.speed = parseFloat(r) / 1e3), ("ease" == o || "e" == o) && (i.anim.ease = r))
            }), i
        },
        h = function (a) {
            if (void 0 === a) return !1;
            var e = new Object;
            e.anim = new Object;
            var t = a.split(";");
            return t && jQuery.each(t, function (a, t) {
                t = t.split(":");
                var i = t[0],
                    n = t[1];
                "x" == i && (e.anim.x = n), "y" == i && (e.anim.y = n), "s" == i && (e.speed = parseFloat(n) / 1e3), ("e" == i || "ease" == i) && (e.anim.ease = n)
            }), e
        },
        c = function (a, e, t) {
            if (void 0 == a && (a = 0), !jQuery.isArray(a) && "string" === jQuery.type(a) && (a.split(",").length > 1 || a.split("[").length > 1)) {
                a = a.replace("[", ""), a = a.replace("]", "");
                var i = a.match(/'/g) ? a.split("',") : a.split(",");
                a = new Array, i && jQuery.each(i, function (e, t) {
                    t = t.replace("'", ""), t = t.replace("'", ""), a.push(t)
                })
            } else {
                var n = a;
                jQuery.isArray(a) || (a = new Array, a.push(n))
            }
            var n = a[a.length - 1];
            if (a.length < e.rle)
                for (var o = 1; o <= e.curWinRange; o++) a.push(n);
            return a
        },
        g = function (a, e, t, i) {
            var n = -1;
            if (a.hasClass("tp-static-layer")) {
                a.data("staticlayer", !0);
                var o = parseInt(a.data("startslide"), 0),
                    r = parseInt(a.data("endslide"), 0),
                    d = e.c.find(".processing-revslide").index(),
                    s = -1 != d ? d : e.c.find(".active-revslide").index();
                s = -1 == s ? 0 : s, "in" === t ? a.hasClass("rev-static-visbile") ? n = r == s || o > s || s > r ? 2 : 0 : s >= o && r >= s || o == s || r == s ? (i || (a.addClass("rev-static-visbile"), a.removeClass("rev-static-hidden")), n = 1) : n = 0 : a.hasClass("rev-static-visbile") ? o > s || s > r ? (n = 2, i || (a.removeClass("rev-static-visbile"), a.addClass("rev-static-hidden"))) : n = 0 : n = 2
            }
            return n
        },
        m = function (a, e) {
            if (void 0 === e) return a;
            e = e.replace("c:", "color:"), e = e.replace("bg:", "background-color:"), e = e.replace("bw:", "border-width:"), e = e.replace("bc:", "border-color:"), e = e.replace("br:", "borderRadius:"), e = e.replace("bs:", "border-style:"), e = e.replace("td:", "text-decoration:");
            var t = e.split(";");
            return t && jQuery.each(t, function (e, t) {
                var i = t.split(":");
                i[0].length > 0 && (a.anim[i[0]] = i[1])
            }), a
        },
        v = function (a, e) {
            var t, i = new Object,
                n = !1;
            if ("rekursive" == e && (t = a.closest(".tp-caption"), t && a.css("fontSize") === t.css("fontSize") && (n = !0)), i.basealign = a.data("basealign") || "grid", i.fontSize = n ? void 0 === t.data("fontsize") ? parseInt(t.css("fontSize"), 0) || 0 : t.data("fontsize") : void 0 === a.data("fontsize") ? parseInt(a.css("fontSize"), 0) || 0 : a.data("fontsize"), i.fontWeight = n ? void 0 === t.data("fontweight") ? parseInt(t.css("fontWeight"), 0) || 0 : t.data("fontweight") : void 0 === a.data("fontweight") ? parseInt(a.css("fontWeight"), 0) || 0 : a.data("fontweight"), i.whiteSpace = n ? void 0 === t.data("whitespace") ? t.css("whitespace") || "normal" : t.data("whitespace") : void 0 === a.data("whitespace") ? a.css("whitespace") || "normal" : a.data("whitespace"), -1 !== jQuery.inArray(a.data("layertype"), ["video", "image", "audio"]) || a.is("img") ? i.lineHeight = 0 : i.lineHeight = n ? void 0 === t.data("lineheight") ? parseInt(t.css("lineHeight"), 0) || 0 : t.data("lineheight") : void 0 === a.data("lineheight") ? parseInt(a.css("lineHeight"), 0) || 0 : a.data("lineheight"), i.letterSpacing = n ? void 0 === t.data("letterspacing") ? parseFloat(t.css("letterSpacing"), 0) || 0 : t.data("letterspacing") : void 0 === a.data("letterspacing") ? parseFloat(a.css("letterSpacing")) || 0 : a.data("letterspacing"), i.paddingTop = void 0 === a.data("paddingtop") ? parseInt(a.css("paddingTop"), 0) || 0 : a.data("paddingtop"), i.paddingBottom = void 0 === a.data("paddingbottom") ? parseInt(a.css("paddingBottom"), 0) || 0 : a.data("paddingbottom"), i.paddingLeft = void 0 === a.data("paddingleft") ? parseInt(a.css("paddingLeft"), 0) || 0 : a.data("paddingleft"), i.paddingRight = void 0 === a.data("paddingright") ? parseInt(a.css("paddingRight"), 0) || 0 : a.data("paddingright"), i.marginTop = void 0 === a.data("margintop") ? parseInt(a.css("marginTop"), 0) || 0 : a.data("margintop"), i.marginBottom = void 0 === a.data("marginbottom") ? parseInt(a.css("marginBottom"), 0) || 0 : a.data("marginbottom"), i.marginLeft = void 0 === a.data("marginleft") ? parseInt(a.css("marginLeft"), 0) || 0 : a.data("marginleft"), i.marginRight = void 0 === a.data("marginright") ? parseInt(a.css("marginRight"), 0) || 0 : a.data("marginright"), i.borderTopWidth = void 0 === a.data("bordertopwidth") ? parseInt(a.css("borderTopWidth"), 0) || 0 : a.data("bordertopwidth"), i.borderBottomWidth = void 0 === a.data("borderbottomwidth") ? parseInt(a.css("borderBottomWidth"), 0) || 0 : a.data("borderbottomwidth"), i.borderLeftWidth = void 0 === a.data("borderleftwidth") ? parseInt(a.css("borderLeftWidth"), 0) || 0 : a.data("borderleftwidth"), i.borderRightWidth = void 0 === a.data("borderrightwidth") ? parseInt(a.css("borderRightWidth"), 0) || 0 : a.data("borderrightwidth"), "rekursive" != e) {
                if (i.color = void 0 === a.data("color") ? "nopredefinedcolor" : a.data("color"), i.whiteSpace = n ? void 0 === t.data("whitespace") ? t.css("whiteSpace") || "nowrap" : t.data("whitespace") : void 0 === a.data("whitespace") ? a.css("whiteSpace") || "nowrap" : a.data("whitespace"), i.minWidth = void 0 === a.data("width") ? parseInt(a.css("minWidth"), 0) || 0 : a.data("width"), i.minHeight = void 0 === a.data("height") ? parseInt(a.css("minHeight"), 0) || 0 : a.data("height"), void 0 != a.data("videowidth") && void 0 != a.data("videoheight")) {
                    var o = a.data("videowidth"),
                        r = a.data("videoheight");
                    o = "100%" === o ? "none" : o, r = "100%" === r ? "none" : r, a.data("width", o), a.data("height", r)
                }
                i.maxWidth = void 0 === a.data("width") ? parseInt(a.css("maxWidth"), 0) || "none" : a.data("width"), i.maxHeight = void 0 === a.data("height") ? parseInt(a.css("maxHeight"), 0) || "none" : a.data("height"), i.wan = void 0 === a.data("wan") ? parseInt(a.css("-webkit-transition"), 0) || "none" : a.data("wan"), i.moan = void 0 === a.data("moan") ? parseInt(a.css("-moz-animation-transition"), 0) || "none" : a.data("moan"), i.man = void 0 === a.data("man") ? parseInt(a.css("-ms-animation-transition"), 0) || "none" : a.data("man"), i.ani = void 0 === a.data("ani") ? parseInt(a.css("transition"), 0) || "none" : a.data("ani")
            }
            return i.styleProps = a.css(["background-color", "border-top-color", "border-bottom-color", "border-right-color", "border-left-color", "border-top-style", "border-bottom-style", "border-left-style", "border-right-style", "border-left-width", "border-right-width", "border-bottom-width", "border-top-width", "color", "text-decoration", "font-style", "borderTopLeftRadius", "borderTopRightRadius", "borderBottomLeftRadius", "borderBottomRightRadius"]), i
        },
        u = function (a, e) {
            var t = new Object;
            return a && jQuery.each(a, function (i, n) {
                t[i] = c(n, e)[e.curWinRange] || a[i]
            }), t
        },
        f = function (a, e, t, i) {
            return a = jQuery.isNumeric(a) ? a * e + "px" : a, a = "full" === a ? i : "auto" === a || "none" === a ? t : a
        },
        w = function (a, e, t, i) {
            var n;
            try {
                if ("BR" == a[0].nodeName || "br" == a[0].tagName) return !1
            } catch (o) {}
            void 0 === a.data("cssobj") ? (n = v(a, t), a.data("cssobj", n)) : n = a.data("cssobj");
            var r = u(n, e),
                d = e.bw,
                s = e.bh;
            if ("off" === i && (d = 1, s = 1), "auto" == r.lineHeight && (r.lineHeight = r.fontSize + 4), !a.hasClass("tp-splitted")) {
                a.css("-webkit-transition", "none"), a.css("-moz-transition", "none"), a.css("-ms-transition", "none"), a.css("transition", "none");
                var l = void 0 !== a.data("transform_hover") || void 0 !== a.data("style_hover");
                if (l && punchgs.TweenLite.set(a, r.styleProps), punchgs.TweenLite.set(a, {
                        fontSize: Math.round(r.fontSize * d) + "px",
                        fontWeight: r.fontWeight,
                        letterSpacing: Math.floor(r.letterSpacing * d) + "px",
                        paddingTop: Math.round(r.paddingTop * s) + "px",
                        paddingBottom: Math.round(r.paddingBottom * s) + "px",
                        paddingLeft: Math.round(r.paddingLeft * d) + "px",
                        paddingRight: Math.round(r.paddingRight * d) + "px",
                        marginTop: r.marginTop * s + "px",
                        marginBottom: r.marginBottom * s + "px",
                        marginLeft: r.marginLeft * d + "px",
                        marginRight: r.marginRight * d + "px",
                        borderTopWidth: Math.round(r.borderTopWidth * s) + "px",
                        borderBottomWidth: Math.round(r.borderBottomWidth * s) + "px",
                        borderLeftWidth: Math.round(r.borderLeftWidth * d) + "px",
                        borderRightWidth: Math.round(r.borderRightWidth * d) + "px",
                        lineHeight: Math.round(r.lineHeight * s) + "px",
                        overwrite: "auto"
                    }), "rekursive" != t) {
                    var p = "slide" == r.basealign ? e.ulw : e.gridwidth[e.curWinRange],
                        h = "slide" == r.basealign ? e.ulh : e.gridheight[e.curWinRange],
                        c = f(r.maxWidth, d, "none", p),
                        g = f(r.maxHeight, s, "none", h),
                        m = f(r.minWidth, d, "0px", p),
                        w = f(r.minHeight, s, "0px", h);
                    punchgs.TweenLite.set(a, {
                        maxWidth: c,
                        maxHeight: g,
                        minWidth: m,
                        minHeight: w,
                        whiteSpace: r.whiteSpace,
                        overwrite: "auto"
                    }), "nopredefinedcolor" != r.color && punchgs.TweenLite.set(a, {
                        color: r.color,
                        overwrite: "auto"
                    }), void 0 != a.data("svg_src") && ("nopredefinedcolor" != r.color ? punchgs.TweenLite.set(a.find("svg"), {
                        fill: r.color,
                        overwrite: "auto"
                    }) : punchgs.TweenLite.set(a.find("svg"), {
                        fill: r.styleProps.color,
                        overwrite: "auto"
                    }))
                }
                setTimeout(function () {
                    a.css("-webkit-transition", a.data("wan")), a.css("-moz-transition", a.data("moan")), a.css("-ms-transition", a.data("man")), a.css("transition", a.data("ani"))
                }, 30)
            }
        },
        y = function (a, e) {
            if (a.hasClass("rs-pendulum") && void 0 == a.data("loop-timeline")) {
                a.data("loop-timeline", new punchgs.TimelineLite);
                var t = void 0 == a.data("startdeg") ? -20 : a.data("startdeg"),
                    i = void 0 == a.data("enddeg") ? 20 : a.data("enddeg"),
                    n = void 0 == a.data("speed") ? 2 : a.data("speed"),
                    o = void 0 == a.data("origin") ? "50% 50%" : a.data("origin"),
                    r = void 0 == a.data("easing") ? punchgs.Power2.easeInOut : a.data("ease");
                t *= e, i *= e, a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(a, n, {
                    force3D: "auto",
                    rotation: t,
                    transformOrigin: o
                }, {
                    rotation: i,
                    ease: r
                })), a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(a, n, {
                    force3D: "auto",
                    rotation: i,
                    transformOrigin: o
                }, {
                    rotation: t,
                    ease: r,
                    onComplete: function () {
                        a.data("loop-timeline").restart()
                    }
                }))
            }
            if (a.hasClass("rs-rotate") && void 0 == a.data("loop-timeline")) {
                a.data("loop-timeline", new punchgs.TimelineLite);
                var t = void 0 == a.data("startdeg") ? 0 : a.data("startdeg"),
                    i = void 0 == a.data("enddeg") ? 360 : a.data("enddeg");
                n = void 0 == a.data("speed") ? 2 : a.data("speed"), o = void 0 == a.data("origin") ? "50% 50%" : a.data("origin"), r = void 0 == a.data("easing") ? punchgs.Power2.easeInOut : a.data("easing"), t *= e, i *= e, a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(a, n, {
                    force3D: "auto",
                    rotation: t,
                    transformOrigin: o
                }, {
                    rotation: i,
                    ease: r,
                    onComplete: function () {
                        a.data("loop-timeline").restart()
                    }
                }))
            }
            if (a.hasClass("rs-slideloop") && void 0 == a.data("loop-timeline")) {
                a.data("loop-timeline", new punchgs.TimelineLite);
                var d = void 0 == a.data("xs") ? 0 : a.data("xs"),
                    s = void 0 == a.data("ys") ? 0 : a.data("ys"),
                    l = void 0 == a.data("xe") ? 0 : a.data("xe"),
                    p = void 0 == a.data("ye") ? 0 : a.data("ye"),
                    n = void 0 == a.data("speed") ? 2 : a.data("speed"),
                    r = void 0 == a.data("easing") ? punchgs.Power2.easeInOut : a.data("easing");
                d *= e, s *= e, l *= e, p *= e, a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(a, n, {
                    force3D: "auto",
                    x: d,
                    y: s
                }, {
                    x: l,
                    y: p,
                    ease: r
                })), a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(a, n, {
                    force3D: "auto",
                    x: l,
                    y: p
                }, {
                    x: d,
                    y: s,
                    onComplete: function () {
                        a.data("loop-timeline").restart()
                    }
                }))
            }
            if (a.hasClass("rs-pulse") && void 0 == a.data("loop-timeline")) {
                a.data("loop-timeline", new punchgs.TimelineLite);
                var h = void 0 == a.data("zoomstart") ? 0 : a.data("zoomstart"),
                    c = void 0 == a.data("zoomend") ? 0 : a.data("zoomend"),
                    n = void 0 == a.data("speed") ? 2 : a.data("speed"),
                    r = void 0 == a.data("easing") ? punchgs.Power2.easeInOut : a.data("easing");
                a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(a, n, {
                    force3D: "auto",
                    scale: h
                }, {
                    scale: c,
                    ease: r
                })), a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(a, n, {
                    force3D: "auto",
                    scale: c
                }, {
                    scale: h,
                    onComplete: function () {
                        a.data("loop-timeline").restart()
                    }
                }))
            }
            if (a.hasClass("rs-wave") && void 0 == a.data("loop-timeline")) {
                a.data("loop-timeline", new punchgs.TimelineLite);
                var g = void 0 == a.data("angle") ? 10 : parseInt(a.data("angle"), 0),
                    m = void 0 == a.data("radius") ? 10 : parseInt(a.data("radius"), 0),
                    n = void 0 == a.data("speed") ? -20 : a.data("speed"),
                    o = void 0 == a.data("origin") ? "50% 50%" : a.data("origin"),
                    v = o.split(" "),
                    u = new Object;
                v.length >= 1 ? (u.x = v[0], u.y = v[1]) : (u.x = "50%", u.y = "50%"), g *= e, m *= e;
                var f = 0 - a.height() / 2 + m * (-1 + parseInt(u.y, 0) / 100),
                    w = a.width() * (-.5 + parseInt(u.x, 0) / 100),
                    y = {
                        a: 0,
                        ang: g,
                        element: a,
                        unit: m,
                        xoffset: w,
                        yoffset: f
                    };
                a.data("loop-timeline").append(new punchgs.TweenLite.fromTo(y, n, {
                    a: 360
                }, {
                    a: 0,
                    force3D: "auto",
                    ease: punchgs.Linear.easeNone,
                    onUpdate: function () {
                        var a = y.a * (Math.PI / 180);
                        punchgs.TweenLite.to(y.element, .1, {
                            force3D: "auto",
                            x: y.xoffset + Math.cos(a) * y.unit,
                            y: y.yoffset + y.unit * (1 - Math.sin(a))
                        })
                    },
                    onComplete: function () {
                        a.data("loop-timeline").restart()
                    }
                }))
            }
        },
        b = function (a) {
            a.find(".rs-pendulum, .rs-slideloop, .rs-pulse, .rs-wave").each(function () {
                var a = jQuery(this);
                void 0 != a.data("loop-timeline") && (a.data("loop-timeline").pause(), a.data("loop-timeline", null))
            })
        }
}(jQuery);

/********************************************
 * REVOLUTION 5.2 EXTENSION - NAVIGATION
 * @version: 1.2.4 (10.03.2016)
 * @requires jquery.themepunch.revolution.js
 * @author ThemePunch
 *********************************************/
! function (t) {
    // var e = jQuery.fn.revolution,
    //     i = e.is_mobile();
    var e = jQuery.fn.revolution;
        // i = e.is_mobile();
    jQuery.extend(!0, e, {
        hideUnHideNav: function (t) {
            var e = t.c.width(),
                i = t.navigation.arrows,
                a = t.navigation.bullets,
                n = t.navigation.thumbnails,
                r = t.navigation.tabs;
            p(i) && T(t.c.find(".tparrows"), i.hide_under, e, i.hide_over), p(a) && T(t.c.find(".tp-bullets"), a.hide_under, e, a.hide_over), p(n) && T(t.c.parent().find(".tp-thumbs"), n.hide_under, e, n.hide_over), p(r) && T(t.c.parent().find(".tp-tabs"), r.hide_under, e, r.hide_over), y(t)
        },
        resizeThumbsTabs: function (t, e) {
            if (t.navigation && t.navigation.tabs.enable || t.navigation && t.navigation.thumbnails.enable) {
                var i = (jQuery(window).width() - 480) / 500,
                    a = new punchgs.TimelineLite,
                    r = t.navigation.tabs,
                    s = t.navigation.thumbnails,
                    o = t.navigation.bullets;
                if (a.pause(), i = i > 1 ? 1 : 0 > i ? 0 : i, p(r) && (e || r.width > r.min_width) && n(i, a, t.c, r, t.slideamount, "tab"), p(s) && (e || s.width > s.min_width) && n(i, a, t.c, s, t.slideamount, "thumb"), p(o) && e) {
                    var d = t.c.find(".tp-bullets");
                    d.find(".tp-bullet").each(function (t) {
                        var e = jQuery(this),
                            i = t + 1,
                            a = e.outerWidth() + parseInt(void 0 === o.space ? 0 : o.space, 0),
                            n = e.outerHeight() + parseInt(void 0 === o.space ? 0 : o.space, 0);
                        "vertical" === o.direction ? (e.css({
                            top: (i - 1) * n + "px",
                            left: "0px"
                        }), d.css({
                            height: (i - 1) * n + e.outerHeight(),
                            width: e.outerWidth()
                        })) : (e.css({
                            left: (i - 1) * a + "px",
                            top: "0px"
                        }), d.css({
                            width: (i - 1) * a + e.outerWidth(),
                            height: e.outerHeight()
                        }))
                    })
                }
                a.play(), y(t)
            }
            return !0
        },
        updateNavIndexes: function (t) {
            function i(t) {
                a.find(t).lenght > 0 && a.find(t).each(function (t) {
                    jQuery(this).data("liindex", t)
                })
            }
            var a = t.c;
            i(".tp-tab"), i(".tp-bullet"), i(".tp-thumb"), e.resizeThumbsTabs(t, !0), e.manageNavigation(t)
        },
        manageNavigation: function (t) {
            var i = e.getHorizontalOffset(t.c.parent(), "left"),
                n = e.getHorizontalOffset(t.c.parent(), "right");
            p(t.navigation.bullets) && ("fullscreen" != t.sliderLayout && "fullwidth" != t.sliderLayout && (t.navigation.bullets.h_offset_old = void 0 === t.navigation.bullets.h_offset_old ? t.navigation.bullets.h_offset : t.navigation.bullets.h_offset_old, t.navigation.bullets.h_offset = "center" === t.navigation.bullets.h_align ? t.navigation.bullets.h_offset_old + i / 2 - n / 2 : t.navigation.bullets.h_offset_old + i - n), b(t.c.find(".tp-bullets"), t.navigation.bullets, t)), p(t.navigation.thumbnails) && b(t.c.parent().find(".tp-thumbs"), t.navigation.thumbnails, t), p(t.navigation.tabs) && b(t.c.parent().find(".tp-tabs"), t.navigation.tabs, t), p(t.navigation.arrows) && ("fullscreen" != t.sliderLayout && "fullwidth" != t.sliderLayout && (t.navigation.arrows.left.h_offset_old = void 0 === t.navigation.arrows.left.h_offset_old ? t.navigation.arrows.left.h_offset : t.navigation.arrows.left.h_offset_old, t.navigation.arrows.left.h_offset = "right" === t.navigation.arrows.left.h_align ? t.navigation.arrows.left.h_offset_old + n : t.navigation.arrows.left.h_offset_old + i, t.navigation.arrows.right.h_offset_old = void 0 === t.navigation.arrows.right.h_offset_old ? t.navigation.arrows.right.h_offset : t.navigation.arrows.right.h_offset_old, t.navigation.arrows.right.h_offset = "right" === t.navigation.arrows.right.h_align ? t.navigation.arrows.right.h_offset_old + n : t.navigation.arrows.right.h_offset_old + i), b(t.c.find(".tp-leftarrow.tparrows"), t.navigation.arrows.left, t), b(t.c.find(".tp-rightarrow.tparrows"), t.navigation.arrows.right, t)), p(t.navigation.thumbnails) && a(t.c.parent().find(".tp-thumbs"), t.navigation.thumbnails), p(t.navigation.tabs) && a(t.c.parent().find(".tp-tabs"), t.navigation.tabs)
        },
        createNavigation: function (t, e) {
            var n = t.parent(),
                r = e.navigation.arrows,
                d = e.navigation.bullets,
                u = e.navigation.thumbnails,
                f = e.navigation.tabs,
                m = p(r),
                b = p(d),
                _ = p(u),
                y = p(f);
            s(t, e), o(t, e), m && v(t, r, e), e.li.each(function (i) {
                var a = jQuery(e.li[e.li.length - 1 - i]),
                    n = jQuery(this);
                b && (e.navigation.bullets.rtl ? w(t, d, a, e) : w(t, d, n, e)), _ && (e.navigation.thumbnails.rtl ? x(t, u, a, "tp-thumb", e) : x(t, u, n, "tp-thumb", e)), y && (e.navigation.tabs.rtl ? x(t, f, a, "tp-tab", e) : x(t, f, n, "tp-tab", e))
            }), t.bind("revolution.slide.onafterswap revolution.nextslide.waiting", function () {
                var i = 0 == t.find(".next-revslide").length ? t.find(".active-revslide").data("index") : t.find(".next-revslide").data("index");
                t.find(".tp-bullet").each(function () {
                    var t = jQuery(this);
                    t.data("liref") === i ? t.addClass("selected") : t.removeClass("selected")
                }), n.find(".tp-thumb, .tp-tab").each(function () {
                    var t = jQuery(this);
                    t.data("liref") === i ? (t.addClass("selected"), t.hasClass("tp-tab") ? a(n.find(".tp-tabs"), f) : a(n.find(".tp-thumbs"), u)) : t.removeClass("selected")
                });
                var s = 0,
                    o = !1;
                e.thumbs && jQuery.each(e.thumbs, function (t, e) {
                    s = o === !1 ? t : s, o = e.id === i || t === i ? !0 : o
                });
                var d = s > 0 ? s - 1 : e.slideamount - 1,
                    l = s + 1 == e.slideamount ? 0 : s + 1;
                if (r.enable === !0) {
                    var h = r.tmp;
                    if (jQuery.each(e.thumbs[d].params, function (t, e) {
                            h = h.replace(e.from, e.to)
                        }), r.left.j.html(h), h = r.tmp, l > e.slideamount) return;
                    jQuery.each(e.thumbs[l].params, function (t, e) {
                        h = h.replace(e.from, e.to)
                    }), r.right.j.html(h), punchgs.TweenLite.set(r.left.j.find(".tp-arr-imgholder"), {
                        backgroundImage: "url(" + e.thumbs[d].src + ")"
                    }), punchgs.TweenLite.set(r.right.j.find(".tp-arr-imgholder"), {
                        backgroundImage: "url(" + e.thumbs[l].src + ")"
                    })
                }
            }), h(r), h(d), h(u), h(f), n.on("mouseenter mousemove", function () {
                n.hasClass("tp-mouseover") || (n.addClass("tp-mouseover"), punchgs.TweenLite.killDelayedCallsTo(g), m && r.hide_onleave && g(n.find(".tparrows"), r, "show"), b && d.hide_onleave && g(n.find(".tp-bullets"), d, "show"), _ && u.hide_onleave && g(n.find(".tp-thumbs"), u, "show"), y && f.hide_onleave && g(n.find(".tp-tabs"), f, "show"), i && (n.removeClass("tp-mouseover"), c(t, e)))
            }), n.on("mouseleave", function () {
                n.removeClass("tp-mouseover"), c(t, e)
            }), m && r.hide_onleave && g(n.find(".tparrows"), r, "hide", 0), b && d.hide_onleave && g(n.find(".tp-bullets"), d, "hide", 0), _ && u.hide_onleave && g(n.find(".tp-thumbs"), u, "hide", 0), y && f.hide_onleave && g(n.find(".tp-tabs"), f, "hide", 0), _ && l(n.find(".tp-thumbs"), e), y && l(n.find(".tp-tabs"), e), "carousel" === e.sliderType && l(t, e, !0), "on" == e.navigation.touch.touchenabled && l(t, e, "swipebased")
        }
    });
    var a = function (t, e) {
            var i = (t.hasClass("tp-thumbs") ? ".tp-thumbs" : ".tp-tabs", t.hasClass("tp-thumbs") ? ".tp-thumb-mask" : ".tp-tab-mask"),
                a = t.hasClass("tp-thumbs") ? ".tp-thumbs-inner-wrapper" : ".tp-tabs-inner-wrapper",
                n = t.hasClass("tp-thumbs") ? ".tp-thumb" : ".tp-tab",
                r = t.find(i),
                s = r.find(a),
                o = e.direction,
                d = "vertical" === o ? r.find(n).first().outerHeight(!0) + e.space : r.find(n).first().outerWidth(!0) + e.space,
                l = "vertical" === o ? r.height() : r.width(),
                h = parseInt(r.find(n + ".selected").data("liindex"), 0),
                p = l / d,
                u = "vertical" === o ? r.height() : r.width(),
                c = 0 - h * d,
                g = "vertical" === o ? s.height() : s.width(),
                v = 0 - (g - u) > c ? 0 - (g - u) : v > 0 ? 0 : c,
                f = s.data("offset");
            p > 2 && (v = 0 >= c - (f + d) ? 0 - d > c - (f + d) ? f : v + d : v, v = d > c - d + f + l && c + (Math.round(p) - 2) * d < f ? c + (Math.round(p) - 2) * d : v), v = 0 - (g - u) > v ? 0 - (g - u) : v > 0 ? 0 : v, "vertical" !== o && r.width() >= s.width() && (v = 0), "vertical" === o && r.height() >= s.height() && (v = 0), t.hasClass("dragged") || ("vertical" === o ? s.data("tmmove", punchgs.TweenLite.to(s, .5, {
                top: v + "px",
                ease: punchgs.Power3.easeInOut
            })) : s.data("tmmove", punchgs.TweenLite.to(s, .5, {
                left: v + "px",
                ease: punchgs.Power3.easeInOut
            })), s.data("offset", v))
        },
        n = function (t, e, i, a, n, r) {
            var s = i.parent().find(".tp-" + r + "s"),
                o = s.find(".tp-" + r + "s-inner-wrapper"),
                d = s.find(".tp-" + r + "-mask"),
                l = a.width * t < a.min_width ? a.min_width : Math.round(a.width * t),
                h = Math.round(l / a.width * a.height),
                p = "vertical" === a.direction ? l : l * n + a.space * (n - 1),
                u = "vertical" === a.direction ? h * n + a.space * (n - 1) : h,
                c = "vertical" === a.direction ? {
                    width: l + "px"
                } : {
                    height: h + "px"
                };
            e.add(punchgs.TweenLite.set(s, c)), e.add(punchgs.TweenLite.set(o, {
                width: p + "px",
                height: u + "px"
            })), e.add(punchgs.TweenLite.set(d, {
                width: p + "px",
                height: u + "px"
            }));
            var g = o.find(".tp-" + r);
            return g && jQuery.each(g, function (t, i) {
                "vertical" === a.direction ? e.add(punchgs.TweenLite.set(i, {
                    top: t * (h + parseInt(void 0 === a.space ? 0 : a.space, 0)),
                    width: l + "px",
                    height: h + "px"
                })) : "horizontal" === a.direction && e.add(punchgs.TweenLite.set(i, {
                    left: t * (l + parseInt(void 0 === a.space ? 0 : a.space, 0)),
                    width: l + "px",
                    height: h + "px"
                }))
            }), e
        },
        r = function (t) {
            var e = 0,
                i = 0,
                a = 0,
                n = 0,
                r = 1,
                s = 1,
                o = 1;
            return "detail" in t && (i = t.detail), "wheelDelta" in t && (i = -t.wheelDelta / 120), "wheelDeltaY" in t && (i = -t.wheelDeltaY / 120), "wheelDeltaX" in t && (e = -t.wheelDeltaX / 120), "axis" in t && t.axis === t.HORIZONTAL_AXIS && (e = i, i = 0), a = e * r, n = i * r, "deltaY" in t && (n = t.deltaY), "deltaX" in t && (a = t.deltaX), (a || n) && t.deltaMode && (1 == t.deltaMode ? (a *= s, n *= s) : (a *= o, n *= o)), a && !e && (e = 1 > a ? -1 : 1), n && !i && (i = 1 > n ? -1 : 1), n = navigator.userAgent.match(/mozilla/i) ? 10 * n : n, (n > 300 || -300 > n) && (n /= 10), {
                spinX: e,
                spinY: i,
                pixelX: a,
                pixelY: n
            }
        },
        s = function (t, i) {
            "on" === i.navigation.keyboardNavigation && jQuery(document).keydown(function (a) {
                ("horizontal" == i.navigation.keyboard_direction && 39 == a.keyCode || "vertical" == i.navigation.keyboard_direction && 40 == a.keyCode) && (i.sc_indicator = "arrow", i.sc_indicator_dir = 0, e.callingNewSlide(i, t, 1)), ("horizontal" == i.navigation.keyboard_direction && 37 == a.keyCode || "vertical" == i.navigation.keyboard_direction && 38 == a.keyCode) && (i.sc_indicator = "arrow", i.sc_indicator_dir = 1, e.callingNewSlide(i, t, -1))
            })
        },
        o = function (t, i) {
            if ("on" === i.navigation.mouseScrollNavigation || "carousel" === i.navigation.mouseScrollNavigation) {
                i.isIEEleven = !!navigator.userAgent.match(/Trident.*rv\:11\./), i.isSafari = !!navigator.userAgent.match(/safari/i), i.ischrome = !!navigator.userAgent.match(/chrome/i);
                var a = i.ischrome ? -49 : i.isIEEleven || i.isSafari ? -9 : navigator.userAgent.match(/mozilla/i) ? -29 : -49,
                    n = i.ischrome ? 49 : i.isIEEleven || i.isSafari ? 9 : navigator.userAgent.match(/mozilla/i) ? 29 : 49;
                t.on("mousewheel DOMMouseScroll", function (s) {
                    var o = r(s.originalEvent),
                        d = t.find(".tp-revslider-slidesli.active-revslide").index(),
                        l = t.find(".tp-revslider-slidesli.processing-revslide").index(),
                        h = -1 != d && 0 == d || -1 != l && 0 == l ? !0 : !1,
                        p = -1 != d && d == i.slideamount - 1 || 1 != l && l == i.slideamount - 1 ? !0 : !1,
                        u = !0;
                    "carousel" == i.navigation.mouseScrollNavigation && (h = p = !1), -1 == l ? o.pixelY < a ? (h || (i.sc_indicator = "arrow", "reverse" !== i.navigation.mouseScrollReverse && (i.sc_indicator_dir = 0, e.callingNewSlide(i, t, -1)), u = !1), p || (i.sc_indicator = "arrow", "reverse" === i.navigation.mouseScrollReverse && (i.sc_indicator_dir = 1, e.callingNewSlide(i, t, 1)), u = !1)) : o.pixelY > n && (p || (i.sc_indicator = "arrow", "reverse" !== i.navigation.mouseScrollReverse && (i.sc_indicator_dir = 1, e.callingNewSlide(i, t, 1)), u = !1), h || (i.sc_indicator = "arrow", "reverse" === i.navigation.mouseScrollReverse && (i.sc_indicator_dir = 0, e.callingNewSlide(i, t, -1)), u = !1)) : u = !1;
                    var c = i.c.offset().top - jQuery("body").scrollTop(),
                        g = c + i.c.height();
                    return "carousel" != i.navigation.mouseScrollNavigation ? ("reverse" !== i.navigation.mouseScrollReverse && (c > 0 && o.pixelY > 0 || g < jQuery(window).height() && o.pixelY < 0) && (u = !0), "reverse" === i.navigation.mouseScrollReverse && (0 > c && o.pixelY < 0 || g > jQuery(window).height() && o.pixelY > 0) && (u = !0)) : u = !1, 0 == u ? (s.preventDefault(s), !1) : void 0
                })
            }
        },
        d = function (t, e, a) {
            return t = i ? jQuery(a.target).closest("." + t).length || jQuery(a.srcElement).closest("." + t).length : jQuery(a.toElement).closest("." + t).length || jQuery(a.originalTarget).closest("." + t).length, t === !0 || 1 === t ? 1 : 0
        },
        l = function (t, a, n) {
            t.data("opt", a);
            var r = a.carousel;
            jQuery(".bullet, .bullets, .tp-bullets, .tparrows").addClass("noSwipe"), r.Limit = "endless";
            var s = (i || "Firefox" === e.get_browser(), t),
                o = "vertical" === a.navigation.thumbnails.direction || "vertical" === a.navigation.tabs.direction ? "none" : "vertical",
                l = a.navigation.touch.swipe_direction || "horizontal";
            o = "swipebased" == n && "vertical" == l ? "none" : n ? "vertical" : o, jQuery.fn.swipetp || (jQuery.fn.swipetp = jQuery.fn.swipe), jQuery.fn.swipetp.defaults && jQuery.fn.swipetp.defaults.excludedElements || jQuery.fn.swipetp.defaults || (jQuery.fn.swipetp.defaults = new Object), jQuery.fn.swipetp.defaults.excludedElements = "label, button, input, select, textarea, .noSwipe", s.swipetp({
                allowPageScroll: o,
                triggerOnTouchLeave: !0,
                treshold: a.navigation.touch.swipe_treshold,
                fingers: a.navigation.touch.swipe_min_touches,
                excludeElements: jQuery.fn.swipetp.defaults.excludedElements,
                swipeStatus: function (i, n, s, o, h, p, u) {
                    var c = d("rev_slider_wrapper", t, i),
                        g = d("tp-thumbs", t, i),
                        v = d("tp-tabs", t, i),
                        f = jQuery(this).attr("class"),
                        m = f.match(/tp-tabs|tp-thumb/gi) ? !0 : !1;
                    if ("carousel" === a.sliderType && (("move" === n || "end" === n || "cancel" == n) && a.dragStartedOverSlider && !a.dragStartedOverThumbs && !a.dragStartedOverTabs || "start" === n && c > 0 && 0 === g && 0 === v)) switch (a.dragStartedOverSlider = !0, o = s && s.match(/left|up/g) ? Math.round(-1 * o) : o = Math.round(1 * o), n) {
                        case "start":
                            void 0 !== r.positionanim && (r.positionanim.kill(), r.slide_globaloffset = "off" === r.infinity ? r.slide_offset : e.simp(r.slide_offset, r.maxwidth)), r.overpull = "none", r.wrap.addClass("dragged");
                            break;
                        case "move":
                            if (r.slide_offset = "off" === r.infinity ? r.slide_globaloffset + o : e.simp(r.slide_globaloffset + o, r.maxwidth), "off" === r.infinity) {
                                var b = "center" === r.horizontal_align ? (r.wrapwidth / 2 - r.slide_width / 2 - r.slide_offset) / r.slide_width : (0 - r.slide_offset) / r.slide_width;
                                "none" !== r.overpull && 0 !== r.overpull || !(0 > b || b > a.slideamount - 1) ? b >= 0 && b <= a.slideamount - 1 && (b >= 0 && o > r.overpull || b <= a.slideamount - 1 && o < r.overpull) && (r.overpull = 0) : r.overpull = o, r.slide_offset = 0 > b ? r.slide_offset + (r.overpull - o) / 1.1 + Math.sqrt(Math.abs((r.overpull - o) / 1.1)) : b > a.slideamount - 1 ? r.slide_offset + (r.overpull - o) / 1.1 - Math.sqrt(Math.abs((r.overpull - o) / 1.1)) : r.slide_offset
                            }
                            e.organiseCarousel(a, s, !0, !0);
                            break;
                        case "end":
                        case "cancel":
                            r.slide_globaloffset = r.slide_offset, r.wrap.removeClass("dragged"), e.carouselToEvalPosition(a, s), a.dragStartedOverSlider = !1, a.dragStartedOverThumbs = !1, a.dragStartedOverTabs = !1
                    } else {
                        if (("move" !== n && "end" !== n && "cancel" != n || a.dragStartedOverSlider || !a.dragStartedOverThumbs && !a.dragStartedOverTabs) && !("start" === n && c > 0 && (g > 0 || v > 0))) {
                            if ("end" == n && !m) {
                                if (a.sc_indicator = "arrow", "horizontal" == l && "left" == s || "vertical" == l && "up" == s) return a.sc_indicator_dir = 0, e.callingNewSlide(a, a.c, 1), !1;
                                if ("horizontal" == l && "right" == s || "vertical" == l && "down" == s) return a.sc_indicator_dir = 1, e.callingNewSlide(a, a.c, -1), !1
                            }
                            return a.dragStartedOverSlider = !1, a.dragStartedOverThumbs = !1, a.dragStartedOverTabs = !1, !0
                        }
                        g > 0 && (a.dragStartedOverThumbs = !0), v > 0 && (a.dragStartedOverTabs = !0);
                        var w = a.dragStartedOverThumbs ? ".tp-thumbs" : ".tp-tabs",
                            _ = a.dragStartedOverThumbs ? ".tp-thumb-mask" : ".tp-tab-mask",
                            x = a.dragStartedOverThumbs ? ".tp-thumbs-inner-wrapper" : ".tp-tabs-inner-wrapper",
                            y = a.dragStartedOverThumbs ? ".tp-thumb" : ".tp-tab",
                            T = a.dragStartedOverThumbs ? a.navigation.thumbnails : a.navigation.tabs;
                        o = s && s.match(/left|up/g) ? Math.round(-1 * o) : o = Math.round(1 * o);
                        var S = t.parent().find(_),
                            j = S.find(x),
                            C = T.direction,
                            L = "vertical" === C ? j.height() : j.width(),
                            Q = "vertical" === C ? S.height() : S.width(),
                            k = "vertical" === C ? S.find(y).first().outerHeight(!0) + T.space : S.find(y).first().outerWidth(!0) + T.space,
                            I = void 0 === j.data("offset") ? 0 : parseInt(j.data("offset"), 0),
                            O = 0;
                        switch (n) {
                            case "start":
                                t.parent().find(w).addClass("dragged"), I = "vertical" === C ? j.position().top : j.position().left, j.data("offset", I), j.data("tmmove") && j.data("tmmove").pause();
                                break;
                            case "move":
                                if (Q >= L) return !1;
                                O = I + o, O = O > 0 ? "horizontal" === C ? O - j.width() * (O / j.width() * O / j.width()) : O - j.height() * (O / j.height() * O / j.height()) : O;
                                var H = "vertical" === C ? 0 - (j.height() - S.height()) : 0 - (j.width() - S.width());
                                O = H > O ? "horizontal" === C ? O + j.width() * (O - H) / j.width() * (O - H) / j.width() : O + j.height() * (O - H) / j.height() * (O - H) / j.height() : O, "vertical" === C ? punchgs.TweenLite.set(j, {
                                    top: O + "px"
                                }) : punchgs.TweenLite.set(j, {
                                    left: O + "px"
                                });
                                break;
                            case "end":
                            case "cancel":
                                if (m) return O = I + o, O = "vertical" === C ? O < 0 - (j.height() - S.height()) ? 0 - (j.height() - S.height()) : O : O < 0 - (j.width() - S.width()) ? 0 - (j.width() - S.width()) : O, O = O > 0 ? 0 : O, O = Math.abs(o) > k / 10 ? 0 >= o ? Math.floor(O / k) * k : Math.ceil(O / k) * k : 0 > o ? Math.ceil(O / k) * k : Math.floor(O / k) * k, O = "vertical" === C ? O < 0 - (j.height() - S.height()) ? 0 - (j.height() - S.height()) : O : O < 0 - (j.width() - S.width()) ? 0 - (j.width() - S.width()) : O, O = O > 0 ? 0 : O, "vertical" === C ? punchgs.TweenLite.to(j, .5, {
                                    top: O + "px",
                                    ease: punchgs.Power3.easeOut
                                }) : punchgs.TweenLite.to(j, .5, {
                                    left: O + "px",
                                    ease: punchgs.Power3.easeOut
                                }), O = O ? O : "vertical" === C ? j.position().top : j.position().left, j.data("offset", O), j.data("distance", o), setTimeout(function () {
                                    a.dragStartedOverSlider = !1, a.dragStartedOverThumbs = !1, a.dragStartedOverTabs = !1
                                }, 100), t.parent().find(w).removeClass("dragged"), !1
                        }
                    }
                }
            })
        },
        h = function (t) {
            t.hide_delay = jQuery.isNumeric(parseInt(t.hide_delay, 0)) ? t.hide_delay / 1e3 : .2, t.hide_delay_mobile = jQuery.isNumeric(parseInt(t.hide_delay_mobile, 0)) ? t.hide_delay_mobile / 1e3 : .2
        },
        p = function (t) {
            return t && t.enable
        },
        u = function (t) {
            return t && t.enable && t.hide_onleave === !0 && (void 0 === t.position ? !0 : !t.position.match(/outer/g))
        },
        c = function (t, e) {
            var a = t.parent();
            u(e.navigation.arrows) && punchgs.TweenLite.delayedCall(i ? e.navigation.arrows.hide_delay_mobile : e.navigation.arrows.hide_delay, g, [a.find(".tparrows"), e.navigation.arrows, "hide"]), u(e.navigation.bullets) && punchgs.TweenLite.delayedCall(i ? e.navigation.bullets.hide_delay_mobile : e.navigation.bullets.hide_delay, g, [a.find(".tp-bullets"), e.navigation.bullets, "hide"]), u(e.navigation.thumbnails) && punchgs.TweenLite.delayedCall(i ? e.navigation.thumbnails.hide_delay_mobile : e.navigation.thumbnails.hide_delay, g, [a.find(".tp-thumbs"), e.navigation.thumbnails, "hide"]), u(e.navigation.tabs) && punchgs.TweenLite.delayedCall(i ? e.navigation.tabs.hide_delay_mobile : e.navigation.tabs.hide_delay, g, [a.find(".tp-tabs"), e.navigation.tabs, "hide"])
        },
        g = function (t, e, i, a) {
            switch (a = void 0 === a ? .5 : a, i) {
                case "show":
                    punchgs.TweenLite.to(t, a, {
                        autoAlpha: 1,
                        ease: punchgs.Power3.easeInOut,
                        overwrite: "auto"
                    });
                    break;
                case "hide":
                    punchgs.TweenLite.to(t, a, {
                        autoAlpha: 0,
                        ease: punchgs.Power3.easeInOu,
                        overwrite: "auto"
                    })
            }
        },
        v = function (t, e, i) {
            e.style = void 0 === e.style ? "" : e.style, e.left.style = void 0 === e.left.style ? "" : e.left.style, e.right.style = void 0 === e.right.style ? "" : e.right.style, 0 === t.find(".tp-leftarrow.tparrows").length && t.append('<div class="tp-leftarrow tparrows ' + e.style + " " + e.left.style + '">' + e.tmp + "</div>"), 0 === t.find(".tp-rightarrow.tparrows").length && t.append('<div class="tp-rightarrow tparrows ' + e.style + " " + e.right.style + '">' + e.tmp + "</div>");
            var a = t.find(".tp-leftarrow.tparrows"),
                n = t.find(".tp-rightarrow.tparrows");
            e.rtl ? (a.click(function () {
                i.sc_indicator = "arrow", i.sc_indicator_dir = 0, t.revnext()
            }), n.click(function () {
                i.sc_indicator = "arrow", i.sc_indicator_dir = 1, t.revprev()
            })) : (n.click(function () {
                i.sc_indicator = "arrow", i.sc_indicator_dir = 0, t.revnext()
            }), a.click(function () {
                i.sc_indicator = "arrow", i.sc_indicator_dir = 1, t.revprev()
            })), e.right.j = t.find(".tp-rightarrow.tparrows"), e.left.j = t.find(".tp-leftarrow.tparrows"), e.padding_top = parseInt(i.carousel.padding_top || 0, 0), e.padding_bottom = parseInt(i.carousel.padding_bottom || 0, 0), b(a, e.left, i), b(n, e.right, i), e.left.opt = i, e.right.opt = i, ("outer-left" == e.position || "outer-right" == e.position) && (i.outernav = !0)
        },
        f = function (t, e, i) {
            var a = t.outerHeight(!0),
                n = (t.outerWidth(!0), void 0 == e.opt ? 0 : 0 == i.conh ? i.height : i.conh),
                r = "layergrid" == e.container ? "fullscreen" == i.sliderLayout ? i.height / 2 - i.gridheight[i.curWinRange] * i.bh / 2 : "on" == i.autoHeight || void 0 != i.minHeight && i.minHeight > 0 ? n / 2 - i.gridheight[i.curWinRange] * i.bh / 2 : 0 : 0,
                s = "top" === e.v_align ? {
                    top: "0px",
                    y: Math.round(e.v_offset + r) + "px"
                } : "center" === e.v_align ? {
                    top: "50%",
                    y: Math.round(0 - a / 2 + e.v_offset) + "px"
                } : {
                    top: "100%",
                    y: Math.round(0 - (a + e.v_offset + r)) + "px"
                };
            t.hasClass("outer-bottom") || punchgs.TweenLite.set(t, s)
        },
        m = function (t, e, i) {
            var a = (t.outerHeight(!0), t.outerWidth(!0)),
                n = "layergrid" == e.container ? "carousel" === i.sliderType ? 0 : i.width / 2 - i.gridwidth[i.curWinRange] * i.bw / 2 : 0,
                r = "left" === e.h_align ? {
                    left: "0px",
                    x: Math.round(e.h_offset + n) + "px"
                } : "center" === e.h_align ? {
                    left: "50%",
                    x: Math.round(0 - a / 2 + e.h_offset) + "px"
                } : {
                    left: "100%",
                    x: Math.round(0 - (a + e.h_offset + n)) + "px"
                };
            punchgs.TweenLite.set(t, r)
        },
        b = function (t, e, i) {
            var a = t.closest(".tp-simpleresponsive").length > 0 ? t.closest(".tp-simpleresponsive") : t.closest(".tp-revslider-mainul").length > 0 ? t.closest(".tp-revslider-mainul") : t.closest(".rev_slider_wrapper").length > 0 ? t.closest(".rev_slider_wrapper") : t.parent().find(".tp-revslider-mainul"),
                n = a.width(),
                r = a.height();
            if (f(t, e, i), m(t, e, i), "outer-left" !== e.position || "fullwidth" != e.sliderLayout && "fullscreen" != e.sliderLayout ? "outer-right" !== e.position || "fullwidth" != e.sliderLayout && "fullscreen" != e.sliderLayout || punchgs.TweenLite.set(t, {
                    right: 0 - t.outerWidth() + "px",
                    x: e.h_offset + "px"
                }) : punchgs.TweenLite.set(t, {
                    left: 0 - t.outerWidth() + "px",
                    x: e.h_offset + "px"
                }), t.hasClass("tp-thumbs") || t.hasClass("tp-tabs")) {
                var s = t.data("wr_padding"),
                    o = t.data("maxw"),
                    d = t.data("maxh"),
                    l = t.hasClass("tp-thumbs") ? t.find(".tp-thumb-mask") : t.find(".tp-tab-mask"),
                    h = parseInt(e.padding_top || 0, 0),
                    p = parseInt(e.padding_bottom || 0, 0);
                o > n && "outer-left" !== e.position && "outer-right" !== e.position ? (punchgs.TweenLite.set(t, {
                    left: "0px",
                    x: 0,
                    maxWidth: n - 2 * s + "px"
                }), punchgs.TweenLite.set(l, {
                    maxWidth: n - 2 * s + "px"
                })) : (punchgs.TweenLite.set(t, {
                    maxWidth: o + "px"
                }), punchgs.TweenLite.set(l, {
                    maxWidth: o + "px"
                })), d + 2 * s > r && "outer-bottom" !== e.position && "outer-top" !== e.position ? (punchgs.TweenLite.set(t, {
                    top: "0px",
                    y: 0,
                    maxHeight: h + p + (r - 2 * s) + "px"
                }), punchgs.TweenLite.set(l, {
                    maxHeight: h + p + (r - 2 * s) + "px"
                })) : (punchgs.TweenLite.set(t, {
                    maxHeight: d + "px"
                }), punchgs.TweenLite.set(l, {
                    maxHeight: d + "px"
                })), "outer-left" !== e.position && "outer-right" !== e.position && (h = 0, p = 0), e.span === !0 && "vertical" === e.direction ? (punchgs.TweenLite.set(t, {
                    maxHeight: h + p + (r - 2 * s) + "px",
                    height: h + p + (r - 2 * s) + "px",
                    top: 0 - h,
                    y: 0
                }), f(l, e, i)) : e.span === !0 && "horizontal" === e.direction && (punchgs.TweenLite.set(t, {
                    maxWidth: "100%",
                    width: n - 2 * s + "px",
                    left: 0,
                    x: 0
                }), m(l, e, i))
            }
        },
        w = function (t, e, i, a) {
            0 === t.find(".tp-bullets").length && (e.style = void 0 === e.style ? "" : e.style, t.append('<div class="tp-bullets ' + e.style + " " + e.direction + '"></div>'));
            var n = t.find(".tp-bullets"),
                r = i.data("index"),
                s = e.tmp;
            jQuery.each(a.thumbs[i.index()].params, function (t, e) {
                s = s.replace(e.from, e.to)
            }), n.append('<div class="justaddedbullet tp-bullet">' + s + "</div>");
            var o = t.find(".justaddedbullet"),
                d = t.find(".tp-bullet").length,
                l = o.outerWidth() + parseInt(void 0 === e.space ? 0 : e.space, 0),
                h = o.outerHeight() + parseInt(void 0 === e.space ? 0 : e.space, 0);
            "vertical" === e.direction ? (o.css({
                top: (d - 1) * h + "px",
                left: "0px"
            }), n.css({
                height: (d - 1) * h + o.outerHeight(),
                width: o.outerWidth()
            })) : (o.css({
                left: (d - 1) * l + "px",
                top: "0px"
            }), n.css({
                width: (d - 1) * l + o.outerWidth(),
                height: o.outerHeight()
            })), o.find(".tp-bullet-image").css({
                backgroundImage: "url(" + a.thumbs[i.index()].src + ")"
            }), o.data("liref", r), o.click(function () {
                a.sc_indicator = "bullet", t.revcallslidewithid(r), t.find(".tp-bullet").removeClass("selected"), jQuery(this).addClass("selected")
            }), o.removeClass("justaddedbullet"), e.padding_top = parseInt(a.carousel.padding_top || 0, 0), e.padding_bottom = parseInt(a.carousel.padding_bottom || 0, 0), e.opt = a, ("outer-left" == e.position || "outer-right" == e.position) && (a.outernav = !0), n.addClass("nav-pos-hor-" + e.h_align), n.addClass("nav-pos-ver-" + e.v_align), n.addClass("nav-dir-" + e.direction), b(n, e, a)
        },
        _ = function (t, e) {
            e = parseFloat(e), t = t.replace("#", "");
            var i = parseInt(t.substring(0, 2), 16),
                a = parseInt(t.substring(2, 4), 16),
                n = parseInt(t.substring(4, 6), 16),
                r = "rgba(" + i + "," + a + "," + n + "," + e + ")";
            return r
        },
        x = function (t, e, i, a, n) {
            var r = "tp-thumb" === a ? ".tp-thumbs" : ".tp-tabs",
                s = "tp-thumb" === a ? ".tp-thumb-mask" : ".tp-tab-mask",
                o = "tp-thumb" === a ? ".tp-thumbs-inner-wrapper" : ".tp-tabs-inner-wrapper",
                d = "tp-thumb" === a ? ".tp-thumb" : ".tp-tab",
                l = "tp-thumb" === a ? ".tp-thumb-image" : ".tp-tab-image";
            if (e.visibleAmount = e.visibleAmount > n.slideamount ? n.slideamount : e.visibleAmount, e.sliderLayout = n.sliderLayout, 0 === t.parent().find(r).length) {
                e.style = void 0 === e.style ? "" : e.style;
                var h = e.span === !0 ? "tp-span-wrapper" : "",
                    p = '<div class="' + a + "s " + h + " " + e.position + " " + e.style + '"><div class="' + a + '-mask"><div class="' + a + 's-inner-wrapper" style="position:relative;"></div></div></div>';
                "outer-top" === e.position ? t.parent().prepend(p) : "outer-bottom" === e.position ? t.after(p) : t.append(p), e.padding_top = parseInt(n.carousel.padding_top || 0, 0), e.padding_bottom = parseInt(n.carousel.padding_bottom || 0, 0), ("outer-left" == e.position || "outer-right" == e.position) && (n.outernav = !0)
            }
            var u = i.data("index"),
                c = t.parent().find(r),
                g = c.find(s),
                v = g.find(o),
                f = "horizontal" === e.direction ? e.width * e.visibleAmount + e.space * (e.visibleAmount - 1) : e.width,
                m = "horizontal" === e.direction ? e.height : e.height * e.visibleAmount + e.space * (e.visibleAmount - 1),
                w = e.tmp;
            jQuery.each(n.thumbs[i.index()].params, function (t, e) {
                w = w.replace(e.from, e.to)
            }), v.append('<div data-liindex="' + i.index() + '" data-liref="' + u + '" class="justaddedthumb ' + a + '" style="width:' + e.width + "px;height:" + e.height + 'px;">' + w + "</div>");
            var x = c.find(".justaddedthumb"),
                y = c.find(d).length,
                T = x.outerWidth() + parseInt(void 0 === e.space ? 0 : e.space, 0),
                S = x.outerHeight() + parseInt(void 0 === e.space ? 0 : e.space, 0);
            x.find(l).css({
                backgroundImage: "url(" + n.thumbs[i.index()].src + ")"
            }), "vertical" === e.direction ? (x.css({
                top: (y - 1) * S + "px",
                left: "0px"
            }), v.css({
                height: (y - 1) * S + x.outerHeight(),
                width: x.outerWidth()
            })) : (x.css({
                left: (y - 1) * T + "px",
                top: "0px"
            }), v.css({
                width: (y - 1) * T + x.outerWidth(),
                height: x.outerHeight()
            })), c.data("maxw", f), c.data("maxh", m), c.data("wr_padding", e.wrapper_padding);
            var j = "outer-top" === e.position || "outer-bottom" === e.position ? "relative" : "absolute";
            "outer-top" !== e.position && "outer-bottom" !== e.position || "center" !== e.h_align ? "0" : "auto";
            g.css({
                maxWidth: f + "px",
                maxHeight: m + "px",
                overflow: "hidden",
                position: "relative"
            }), c.css({
                maxWidth: f + "px",
                maxHeight: m + "px",
                overflow: "visible",
                position: j,
                background: _(e.wrapper_color, e.wrapper_opacity),
                padding: e.wrapper_padding + "px",
                boxSizing: "contet-box"
            }), x.click(function () {
                n.sc_indicator = "bullet";
                var e = t.parent().find(o).data("distance");
                e = void 0 === e ? 0 : e, Math.abs(e) < 10 && (t.revcallslidewithid(u), t.parent().find(r).removeClass("selected"), jQuery(this).addClass("selected"))
            }), x.removeClass("justaddedthumb"), e.opt = n, c.addClass("nav-pos-hor-" + e.h_align), c.addClass("nav-pos-ver-" + e.v_align), c.addClass("nav-dir-" + e.direction), b(c, e, n)
        },
        y = function (t) {
            var e = t.c.parent().find(".outer-top"),
                i = t.c.parent().find(".outer-bottom");
            t.top_outer = e.hasClass("tp-forcenotvisible") ? 0 : e.outerHeight() || 0, t.bottom_outer = i.hasClass("tp-forcenotvisible") ? 0 : i.outerHeight() || 0
        },
        T = function (t, e, i, a) {
            e > i || i > a ? t.addClass("tp-forcenotvisible") : t.removeClass("tp-forcenotvisible")
        }
}(jQuery);

/*****************************************************************************************************
 * jquery.themepunch.revmigrate.js - jQuery Plugin for Revolution Slider Migration from 4.x to 5.0   
 * @version: 1.0.2 (20.01.2016)
 * @requires jQuery v1.7 or later (tested on 1.9)
 * @author ThemePunch
*****************************************************************************************************/
!function(t){var a=jQuery.fn.revolution;jQuery.extend(!0,a,{migration:function(t,a){return a=o(a),e(t,a),a}});var o=function(t){if(t.parallaxLevels||t.parallaxBgFreeze){var a=new Object;a.type=t.parallax,a.levels=t.parallaxLevels,a.bgparallax="on"==t.parallaxBgFreeze?"off":"on",a.disable_onmobile=t.parallaxDisableOnMobile,t.parallax=a}if(void 0===t.disableProgressBar&&(t.disableProgressBar=t.hideTimerBar||"off"),(t.startwidth||t.startheight)&&(t.gridwidth=t.startwidth,t.gridheight=t.startheight),void 0===t.sliderType&&(t.sliderType="standard"),"on"===t.fullScreen&&(t.sliderLayout="fullscreen"),"on"===t.fullWidth&&(t.sliderLayout="fullwidth"),void 0===t.sliderLayout&&(t.sliderLayout="auto"),void 0===t.navigation){var o=new Object;if("solo"==t.navigationArrows||"nextto"==t.navigationArrows){var e=new Object;e.enable=!0,e.style=t.navigationStyle||"",e.hide_onmobile="on"===t.hideArrowsOnMobile?!0:!1,e.hide_onleave=t.hideThumbs>0?!0:!1,e.hide_delay=t.hideThumbs>0?t.hideThumbs:200,e.hide_delay_mobile=t.hideNavDelayOnMobile||1500,e.hide_under=0,e.tmp="",e.left={h_align:t.soloArrowLeftHalign,v_align:t.soloArrowLeftValign,h_offset:t.soloArrowLeftHOffset,v_offset:t.soloArrowLeftVOffset},e.right={h_align:t.soloArrowRightHalign,v_align:t.soloArrowRightValign,h_offset:t.soloArrowRightHOffset,v_offset:t.soloArrowRightVOffset},o.arrows=e}if("bullet"==t.navigationType){var r=new Object;r.style=t.navigationStyle||"",r.enable=!0,r.hide_onmobile="on"===t.hideArrowsOnMobile?!0:!1,r.hide_onleave=t.hideThumbs>0?!0:!1,r.hide_delay=t.hideThumbs>0?t.hideThumbs:200,r.hide_delay_mobile=t.hideNavDelayOnMobile||1500,r.hide_under=0,r.direction="horizontal",r.h_align=t.navigationHAlign||"center",r.v_align=t.navigationVAlign||"bottom",r.space=5,r.h_offset=t.navigationHOffset||0,r.v_offset=t.navigationVOffset||20,r.tmp='<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>',o.bullets=r}if("thumb"==t.navigationType){var i=new Object;i.style=t.navigationStyle||"",i.enable=!0,i.width=t.thumbWidth||100,i.height=t.thumbHeight||50,i.min_width=t.thumbWidth||100,i.wrapper_padding=2,i.wrapper_color="#f5f5f5",i.wrapper_opacity=1,i.visibleAmount=t.thumbAmount||3,i.hide_onmobile="on"===t.hideArrowsOnMobile?!0:!1,i.hide_onleave=t.hideThumbs>0?!0:!1,i.hide_delay=t.hideThumbs>0?t.hideThumbs:200,i.hide_delay_mobile=t.hideNavDelayOnMobile||1500,i.hide_under=0,i.direction="horizontal",i.span=!1,i.position="inner",i.space=2,i.h_align=t.navigationHAlign||"center",i.v_align=t.navigationVAlign||"bottom",i.h_offset=t.navigationHOffset||0,i.v_offset=t.navigationVOffset||20,i.tmp='<span class="tp-thumb-image"></span><span class="tp-thumb-title"></span>',o.thumbnails=i}t.navigation=o,t.navigation.keyboardNavigation=t.keyboardNavigation||"on",t.navigation.onHoverStop=t.onHoverStop||"on",t.navigation.touch={touchenabled:t.touchenabled||"on",swipe_treshold:t.swipe_treshold||75,swipe_min_touches:t.swipe_min_touches||1,drag_block_vertical:t.drag_block_vertical||!1}}return void 0==t.fallbacks&&(t.fallbacks={isJoomla:t.isJoomla||!1,panZoomDisableOnMobile:t.parallaxDisableOnMobile||"off",simplifyAll:t.simplifyAll||"on",nextSlideOnWindowFocus:t.nextSlideOnWindowFocus||"off",disableFocusListener:t.disableFocusListener||!0}),t},e=function(t,a){var o=new Object,e=t.width(),r=t.height();o.skewfromleftshort="x:-50;skX:85;o:0",o.skewfromrightshort="x:50;skX:-85;o:0",o.sfl="x:-50;o:0",o.sfr="x:50;o:0",o.sft="y:-50;o:0",o.sfb="y:50;o:0",o.skewfromleft="x:top;skX:85;o:0",o.skewfromright="x:bottom;skX:-85;o:0",o.lfl="x:top;o:0",o.lfr="x:bottom;o:0",o.lft="y:left;o:0",o.lfb="y:right;o:0",o.fade="o:0";720*Math.random()-360;t.find(".tp-caption").each(function(){var t=jQuery(this),a=(Math.random()*(2*e)-e,Math.random()*(2*r)-r,3*Math.random(),720*Math.random()-360,70*Math.random()-35,70*Math.random()-35,t.attr("class"));o.randomrotate="x:{-400,400};y:{-400,400};sX:{0,2};sY:{0,2};rZ:{-180,180};rX:{-180,180};rY:{-180,180};o:0;",a.match("randomrotate")?t.data("transform_in",o.randomrotate):a.match(/\blfl\b/)?t.data("transform_in",o.lfl):a.match(/\blfr\b/)?t.data("transform_in",o.lfr):a.match(/\blft\b/)?t.data("transform_in",o.lft):a.match(/\blfb\b/)?t.data("transform_in",o.lfb):a.match(/\bsfl\b/)?t.data("transform_in",o.sfl):a.match(/\bsfr\b/)?t.data("transform_in",o.sfr):a.match(/\bsft\b/)?t.data("transform_in",o.sft):a.match(/\bsfb\b/)?t.data("transform_in",o.sfb):a.match(/\bskewfromleftshort\b/)?t.data("transform_in",o.skewfromleftshort):a.match(/\bskewfromrightshort\b/)?t.data("transform_in",o.skewfromrightshort):a.match(/\bskewfromleft\b/)?t.data("transform_in",o.skewfromleft):a.match(/\bskewfromright\b/)?t.data("transform_in",o.skewfromright):a.match(/\bfade\b/)&&t.data("transform_in",o.fade),a.match(/\brandomrotateout\b/)?t.data("transform_out",o.randomrotate):a.match(/\bltl\b/)?t.data("transform_out",o.lfl):a.match(/\bltr\b/)?t.data("transform_out",o.lfr):a.match(/\bltt\b/)?t.data("transform_out",o.lft):a.match(/\bltb\b/)?t.data("transform_out",o.lfb):a.match(/\bstl\b/)?t.data("transform_out",o.sfl):a.match(/\bstr\b/)?t.data("transform_out",o.sfr):a.match(/\bstt\b/)?t.data("transform_out",o.sft):a.match(/\bstb\b/)?t.data("transform_out",o.sfb):a.match(/\bskewtoleftshortout\b/)?t.data("transform_out",o.skewfromleftshort):a.match(/\bskewtorightshortout\b/)?t.data("transform_out",o.skewfromrightshort):a.match(/\bskewtoleftout\b/)?t.data("transform_out",o.skewfromleft):a.match(/\bskewtorightout\b/)?t.data("transform_out",o.skewfromright):a.match(/\bfadeout\b/)&&t.data("transform_out",o.fade),void 0!=t.data("customin")&&t.data("transform_in",t.data("customin")),void 0!=t.data("customout")&&t.data("transform_out",t.data("customout"))})}}(jQuery);