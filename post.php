<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jean-David Daviet</title>
  <link rel="stylesheet" href="style.min.css">
</head>
<body>
  <header class="wrapper--narrow header">
    <div class="row">
      <a href="/">Jean-David Daviet</a>
      <nav class="navbar">
        <ul class="navbar__list row">
          <!-- <li class="navbar__item"><a href="/post.php" class="navbar__link">WordPress</a></li> -->
          <!-- <li class="navbar__item"><a href="/post.php" class="navbar__link">WooCommerce</a></li> -->
          <li class="navbar__item"><a href="/post.php" class="navbar__link">Blog</a></li>
          <!-- <li class="navbar__item"><a href="/post.php" class="navbar__link">Travaux</a></li> -->
        </ul>
      </nav>
    </div>
  </header>

  <article class="has-summary">
    
    <div class="wrapper--narrow">
      <div class="article__title">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 988.44 447">
          <defs>
            <linearGradient id="linear" x1="0%" y1="50%" x2="100%" y2="50%">
              <stop offset="0%" stop-color="#5df9ff"></stop>
              <stop offset="100%" stop-color="#b5deff"></stop>
            </linearGradient>
            <clipPath id="test"  clipPathUnits="objectBoundingBox">
              <path d="M0.6444 0.9799a0.3592 0.7942 0 0 0 0.3480 -0.6532c0.0051 -0.0738 0.0051 -0.1544 -0.0121 -0.2170c-0.0223 -0.0805 -0.0688 -0.1119 -0.1113 -0.1096s-0.0830 0.0358 -0.1244 0.0582c-0.0941 0.0515 -0.1922 0.0515 -0.2873 0.0201C0.3925 0.0559 0.3288 0.0201 0.2630 0.0089S0.1012 0.0089 0.0728 0.0805C0.0283 0.1365 -0.0101 0.2461 0.0020 0.3557c0.0091 0.0805 0.0415 0.1365 0.0688 0.1946c0.0263 0.0604 0.0486 0.1298 0.0759 0.1879c0.0334 0.0738 0.0739 0.1253 0.1214 0.1096c0.0556 -0.0157 0.1123 0.0089 0.1659 0.0403c0.0617 0.0358 0.1224 0.0805 0.1862 0.0895l0.0243 0.0022z"></path>
            </clipPath>
          </defs>
          <path class="catchphrase__pathunder" fill="#f2fdff"></path>
          <!-- <path style="display: none;" class="catchphrase__path" fill="url(#linear)" d="M636.61,437.62c77.7-.63,155.08-27.65,216-76,67.12-53.26,113.6-131.9,127.88-216.38,5.5-32.53,5.84-68-11.47-96.1C946.91,13.33,901-1.4,858.94.1s-82.4,16.15-123.27,26.28C643.19,49.31,546,49.25,451.82,35,387.9,25.33,324.9,9.22,260.48,3.72s-132,.41-188.32,32.09C27.8,60.74-10,110,2.36,159.42c9,36,41,60.47,67.15,86.8,26.42,26.62,48.27,57.53,75,83.85,33.28,32.79,73.63,55.79,120.82,49.31,54.9-7.54,110.52,3.2,163.52,17.13,60.84,16,121.16,36.58,183.94,40.48Q624.7,437.73,636.61,437.62Z"/> -->
          <path class="catchphrase__path" fill="url(#linear)"></path>
        </svg>
        <img src="src/img/jeremy.jpg" srcset="src/img/jeremy@2x.jpg 2x" alt="" style="clip-path: url(#test);">
        <h1>Comprendre les sites internet – Les flux RSS</h1>
      </div>
    </div>

    <div class="wrapper--narrow">
        <div class="page-summary text--beforeMidnightBlue">
            <p>Simplify pop-ups and modals using the HTML dialog element.</p>
        </div>
    </div>
    <div class="wrapper--narrow page-block">
        <div class="text" data-module="Text">
            <p>Let's talk about pop-ups. And modals, overlays, or anything else you like to call them (remember <a href="https://lokeshdhakar.com/projects/lightbox2/">Lightbox</a>?). Despite user experience concerns, these elements remain popular on the web. But technical implementations can be wildly inconsistent. Looking to stop reinventing the wheel? This post will help guide you in your quest to show content on top of other content.</p>
            <h2>Problem</h2>
            <p>Implementing solutions for pop-ups can be difficult. What seems trivial on the surface can become more complicated in a hurry. You may need to account for modal and popover designs. And animations. How about custom behavior on form submissions? What happens if there is more than one modal trying to display at the same time?</p>
            <p>To help with that, you may reach for a plugin solution. But there are so many choices, and a lot of topics to consider:</p>
            <ul>
                <li>API</li>
                <li>Accessibility</li>
                <li>Dependencies. You might not want jQuery, React, or similar.</li>
                <li>Support. Who is maintaining it? How soon are issues addressed?&nbsp;</li>
                <li>Extensibility. How easy is it for me to customize and add new features?</li>
            </ul>
            <p>Of course you may choose to build your own instead. But how flexible is it? Can you reuse as-is in other places? What about other projects?</p>
            <h2>Solution</h2>
            <p>Enter the <a href="https://www.w3.org/TR/html52/interactive-elements.html#the-dialog-element">HTML dialog element</a>! Published in HTML 5.2 (2018), <code>&lt;dialog&gt;</code> is a native browser element for creating pop-ups and modals.</p>
        </div>
    </div>


    <!-- codeblock -->
    <div class="code-block page-block" data-module="CodeHighlight">
      <pre class="line-numbers language-twig"><div class="wrapper--narrow"><code class="language-twig"><span class="token other"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>dialog</span> <span class="token attr-name">open</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h1</span><span class="token punctuation">&gt;</span></span>Hello<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h1</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>dialog</span><span class="token punctuation">&gt;</span></span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></div></pre>
    </div>
    <!-- end codeblock -->


    <div class="wrapper--narrow page-block">
        <div class="text" data-module="Text">
            <p>A dialog element provides:</p>
            <ul>
                <li>An element that is easy to show and hide, including an <code>
open</code> boolean attribute on the element itself.</li>
                <li>Two versions: a&nbsp;standard popover or modal version.</li>
                <li>A <a href="https://fullscreen.spec.whatwg.org/#::backdrop-pseudo-element">::backdrop pseudo-element</a>&nbsp;for modal types.</li>
                <li>Built-in focus: see <a href="https://www.w3.org/TR/html52/interactive-elements.html#dialog-focusing-steps">dialog focusing steps</a>.</li>
                <li>ARIA role support (<code>dialog</code> is the implied default). Also accepts the <a href="https://www.w3.org/TR/wai-aria-1.1/#alertdialog">alertdialog role</a>.</li>
                <li>A <a href="https://www.w3.org/TR/html52/interactive-elements.html#pending-dialog-stack">pending stack</a> for multiple dialogs.</li>
                <li>A DOM interface with the <code>open</code> boolean and methods <code>show</code> , <code>showModal</code> , and <code>close</code>.</li>
            </ul>
            <p>And those are just some highlights! Showing content on top of other content has never been easier.</p>
            <h3>Standard Use</h3>
        </div>
    </div>


    <!-- codeblock -->
    <div class="code-block page-block" data-module="CodeHighlight">
      <pre class="line-numbers language-markup"><div class="wrapper--narrow"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>dialog</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dialog<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h1</span><span class="token punctuation">&gt;</span></span>Hello<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h1</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>dialog</span><span class="token punctuation">&gt;</span></span>

<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>script</span><span class="token punctuation">&gt;</span></span><span class="token script language-javascript">
  <span class="token keyword">var</span> dialog <span class="token operator">=</span> document<span class="token punctuation">.</span><span class="token function">getElementById</span><span class="token punctuation">(</span><span class="token string">'dialog'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  dialog<span class="token punctuation">.</span><span class="token function">show</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>script</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></div></pre>
    </div>
    <!-- end codeblock -->


    <div class="wrapper--narrow page-block">
        <div class="text" data-module="Text">
            <h3>Modal Use</h3>
            <p>The modal version is activated by method, i.e. <code>dialog.showModal()</code>. This differs from standard use in a couple of ways:</p>
            <ul>
                <li>Guaranteed to be on top of any other elements regardless of their z-index.</li>
                <li><code>dialog::backdrop</code>&nbsp;provided for styling.</li>
                <li>Close with Esc key.</li>
            </ul>
        </div>
    </div>


    <!-- codeblock -->
    <div class="code-block page-block" data-module="CodeHighlight">
        <pre class="line-numbers  language-markup"><div class="wrapper--narrow"><code class="  language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>dialog</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dialog<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h1</span><span class="token punctuation">&gt;</span></span>Hello<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h1</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>dialog</span><span class="token punctuation">&gt;</span></span>

<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>script</span><span class="token punctuation">&gt;</span></span><span class="token script language-javascript">
  <span class="token keyword">var</span> dialog <span class="token operator">=</span> document<span class="token punctuation">.</span><span class="token function">getElementById</span><span class="token punctuation">(</span><span class="token string">'dialog'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  dialog<span class="token punctuation">.</span><span class="token function">showModal</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// "showModal" instead of "show"</span>
</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>script</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></div></pre>
    </div>
    <!-- end codeblock -->


    <div class="wrapper--narrow page-block">
        <div class="text" data-module="Text">
            <h3>::backdrop</h3>
            <p>Target&nbsp;<code>dialog::backdrop</code>&nbsp;to style the background of a modal dialog. Really handy for a semi-transparent background overlay.</p>
        </div>
    </div>


    <!-- codeblock -->
    <div class="code-block page-block" data-module="CodeHighlight">
        <pre class="line-numbers  language-css"><div class="wrapper--narrow"><code class="  language-css"><span class="token selector">dialog::backdrop</span> <span class="token punctuation">{</span>
  <span class="token property">background-color</span><span class="token punctuation">:</span> <span class="token function">rgba</span><span class="token punctuation">(</span>0, 0, 0, 0.8<span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></div></pre>
    </div>
    <!-- end codeblock -->


    <div class="wrapper--narrow page-block">
        <div class="text" data-module="Text">
            <h3>Dialog Forms</h3>
            <p>A new form attribute,&nbsp;<code>method="dialog"</code>, can be used within dialog elements. Specifying the attribute provides the contents of the submit button's&nbsp;<code>value</code>&nbsp;attribute to the dialog element itself.</p>
        </div>
    </div>


    <!-- codeblock -->
    <div class="code-block page-block" data-module="CodeHighlight">
        <pre class="line-numbers  language-markup"><div class="wrapper--narrow"><code class="  language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>dialog</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dialog<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span> <span class="token attr-name">method</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dialog<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Would you like to continue?<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>submit<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>no<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>No<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>submit<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>yes<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Yes<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>dialog</span><span class="token punctuation">&gt;</span></span>

<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>script</span><span class="token punctuation">&gt;</span></span><span class="token script language-javascript">
  <span class="token keyword">var</span> dialog <span class="token operator">=</span> document<span class="token punctuation">.</span><span class="token function">getElementById</span><span class="token punctuation">(</span><span class="token string">'dialog'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  dialog<span class="token punctuation">.</span><span class="token function">showModal</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  dialog<span class="token punctuation">.</span><span class="token function">addEventListener</span><span class="token punctuation">(</span><span class="token string">'close'</span><span class="token punctuation">,</span> <span class="token keyword">function</span> <span class="token punctuation">(</span>event<span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token keyword">if</span> <span class="token punctuation">(</span>dialog<span class="token punctuation">.</span>returnValue <span class="token operator">===</span> <span class="token string">'yes'</span><span class="token punctuation">)</span> <span class="token punctuation">{</span> <span class="token comment" spellcheck="true">/* ... */</span> <span class="token punctuation">}</span>
  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>script</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></div></pre>
    </div>
    <!-- end codeblock -->

    
    <div class="wrapper--narrow page-block">
        <div class="text" data-module="Text">
            <h3>Caniuse?</h3>
            <p>At the time of this writing,&nbsp;<a href="https://caniuse.com/#feat=dialog">browser support for the dialog element</a>&nbsp;is about&nbsp;70% globally. But there is hope for more. Firefox's implementation is behind a flag. Edge status for the dialog is&nbsp;under consideration, stating "...likely for a future release." You can&nbsp;<a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/6508895-dialog-element">cast votes&nbsp;supporting&nbsp;development on Edge</a>.</p>
            <h3>Polyfill</h3>
            <p>Now you need a polyfill. <em>Audible sigh</em>. That being said,&nbsp;I believe&nbsp;it's worthwhile to continue with dialog, even&nbsp;in this intermediate state. If you're with me, here are&nbsp;two options to consider right now.</p>
            <h4>Google Chrome Polyfill</h4>
            <p><strong>Pros</strong>: drop-in polyfill from the Google Chrome team. Easy to use.&nbsp;<strong>Cons</strong>: not super small.
                <br>
            </p>
            <p><a href="https://github.com/GoogleChrome/dialog-polyfill">https://github.com/GoogleChrome/dialog-polyfill</a></p>
            <h4>a11y-dialog</h4>
            <p><strong>Pros</strong>: very small. Built with accessibility in mind.&nbsp;React and Vue variants available.&nbsp;<strong>Cons</strong>: requires more markup than a drop-in polyfill.</p>
            <p><a href="https://github.com/edenspiekermann/a11y-dialog">https://github.com/edenspiekermann/a11y-dialog</a></p>
            <p>React:&nbsp;<a href="https://github.com/HugoGiraudel/react-a11y-dialog">https://github.com/HugoGiraudel/react-a11y-dialog</a></p>
            <p>Vue:&nbsp;<a href="https://github.com/morkro/vue-a11y-dialog">https://github.com/morkro/vue-a11y-dialog</a></p>
        </div>
    </div>
</article>

</body>
</html>