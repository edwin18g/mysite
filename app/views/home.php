
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <title>Edwin Barnabas — edwin18g | CIO • Software Architect • AI Agentic Builder</title>
  <meta name="description" content="Edwin Barnabas (edwin18g) — CIO at ekhool. Software Architect, AI Agentic Framework Builder. Premium portfolio with interactive chat UI, architecture diagrams, PWA support and AI assistant." />
  <meta name="theme-color" content="#6d28d9" />

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Mermaid for architecture diagrams -->
  <script src="https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.min.js"></script>

  <style>
    /* ==========================
       V6 — MERGED STYLES (All)
       - VisionOS spatial + iOS bubbles + Slack features
       - Neo-Brutalist glass + 3D tilt + Minimal whitespace + Cyber purple brand
       - Executive + AI hybrid components
       ========================== */

    :root{
      --accent: #6d28d9; /* brand */
      --accent-2: #a78bfa;
      --bg-start: #f4f6ff;
      --bg-end: #fbfbff;
      --glass: rgba(255,255,255,0.65);
      --muted: #6b7280;
      --card-radius:20px;
      --radius-sm:12px;
      --maxw:1280px;
      --glass-dark: rgba(8,10,20,0.5);
    }

    html,body{height:100%;margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,'Helvetica Neue',Arial;background:linear-gradient(180deg,var(--bg-start),var(--bg-end));color:#071133;-webkit-font-smoothing:antialiased}
    *{box-sizing:border-box}

    /* Layout */
    .wrap{max-width:var(--maxw);margin:28px auto;padding:18px;display:grid;grid-template-columns:260px 1fr 420px;gap:20px;align-items:start}
    @media (max-width:1100px){.wrap{grid-template-columns:1fr;padding:12px}.right-panel{display:none}}

    /* Panel base (glass + neo) */
    .panel{background:var(--glass);backdrop-filter:blur(10px) saturate(1.05);border-radius:var(--card-radius);box-shadow:0 18px 60px rgba(12,18,49,0.08);overflow:hidden;border:1px solid rgba(12,18,49,0.03)}
    .panel.soft{background:linear-gradient(180deg,rgba(255,255,255,0.9),rgba(255,255,255,0.82));}

    /* SIDEBAR */
    .brand{display:flex;align-items:center;gap:12px;padding:14px}
    .logo{width:52px;height:52px;border-radius:14px;background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:20px}
    .small-muted{color:var(--muted);font-size:13px}
    #sectionsList{padding:10px;max-height:62vh;overflow:auto}
    .section-item{display:flex;gap:10px;align-items:center;padding:10px;border-radius:12px;cursor:pointer}
    .section-item .dot{width:44px;height:44px;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700}
    .section-item:hover{background:rgba(109,40,217,0.06);transform:translateY(-4px)}

    /* VisionOS hero area */
    .hero{padding:18px;display:flex;gap:14px;align-items:center}
    .hero .title{font-weight:800;font-size:18px}
    .hero .subtitle{color:var(--muted);font-size:13px}

    /* CHAT MAIN */
    .chat-header{padding:14px 18px;border-bottom:1px solid rgba(12,18,49,0.04);display:flex;align-items:center;gap:12px}
    .chat-body{padding:22px;flex:1;overflow:auto;background:linear-gradient(180deg,rgba(250,250,255,0.9),rgba(248,249,255,0.86));min-height:360px}

    /* iOS bubble physics */
    .msg{display:inline-block;padding:12px 16px;border-radius:18px;margin-bottom:12px;line-height:1.45;max-width:72%;box-shadow:0 8px 30px rgba(12,18,49,0.06);transition:transform .18s cubic-bezier(.2,.9,.3,1)}
    .msg.me{background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#fff;margin-left:auto;border-bottom-right-radius:6px}
    .msg.them{background:#fff;border:1px solid rgba(12,18,49,0.04)}
    .msg.me:active{transform:translateY(2px) scale(.995)}

    /* Grouping & timestamps (Slack/WhatsApp mix) */
    .group{margin-bottom:10px}
    .meta{font-size:12px;color:var(--muted);margin-bottom:8px}
    .time-sep{display:flex;justify-content:center;margin:18px 0;color:var(--muted);font-size:13px}

    /* Reactions */
    .reactions{display:flex;gap:6px;margin-top:6px}
    .reaction{padding:6px 8px;border-radius:999px;border:1px solid rgba(12,18,49,0.04);background:#fff;font-size:13px;cursor:pointer}

    /* Typing */
    .typing{display:flex;align-items:center;gap:8px;font-size:13px;color:var(--muted)}
    .dots{width:48px;height:14px;display:flex;align-items:center;justify-content:space-between}
    .dots span{width:8px;height:8px;background:#d1d5db;border-radius:50%;display:inline-block;animation:blink 1.2s infinite}
    .dots span:nth-child(2){animation-delay:0.12s}.dots span:nth-child(3){animation-delay:0.24s}
    @keyframes blink{0%{opacity:0.3;transform:translateY(0)}50%{opacity:1;transform:translateY(-4px)}100%{opacity:0.3;transform:translateY(0)}}

    /* Input row (iMessage-style) */
    .input-row{padding:14px 18px;border-top:1px solid rgba(12,18,49,0.04);display:flex;gap:10px;align-items:center}
    .input-row .control{display:flex;gap:8px}
    .pill{background:rgba(99,102,241,0.06);padding:6px 10px;border-radius:999px;color:var(--accent);font-weight:700}

    /* RIGHT PANEL — Executive + AI */
    .profile{padding:18px;display:flex;flex-direction:column;gap:12px}
    .avatar{width:104px;height:104px;border-radius:22px;background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;color:#fff;font-weight:900;font-size:36px;box-shadow:0 18px 40px rgba(109,40,217,0.12)}
    .skill{display:inline-block;padding:6px 10px;border-radius:999px;background:rgba(109,40,217,0.08);color:var(--accent);font-weight:700}

    /* Project cards, neo-brutalist accents */
    .card-project{background:linear-gradient(180deg,rgba(255,255,255,0.95),rgba(255,255,255,0.9));padding:12px;border-radius:14px;border-left:4px solid rgba(109,40,217,0.12);transition:transform .16s}
    .card-project:hover{transform:translateY(-6px)}

    /* 3D tilt + magnetic cursor */
    .tilt{transform-style:preserve-3d;transition:transform .18s}
    .magnetic{transition:transform .18s cubic-bezier(.2,.9,.3,1)}

    /* Minimal whitespace variant (used sparsely) */
    .clean-hero{padding:28px}

    /* Cyber accent lines */
    .accent-line{height:3px;background:linear-gradient(90deg,var(--accent),var(--accent-2));border-radius:6px;margin:8px 0}

    /* PWA badges */
    .pwa-badges{display:flex;gap:8px}

    /* Accessibility */
    button:focus,input:focus,div[role='button']:focus{outline:3px solid rgba(99,102,241,0.18);outline-offset:2px}
  </style>
</head>
<body>
  <div class="wrap">

    <!-- LEFT: Sidebar -->
    <aside class="panel" aria-label="Sidebar">
      <div class="brand">
        <div class="logo">e</div>
        <div>
          <div style="font-weight:900">edwin18g</div>
          <div class="small-muted">Edwin Barnabas — CIO @ ekhool</div>
        </div>
        <div class="ms-auto">
          <button id="themeToggle" class="btn btn-sm btn-outline-light" title="Toggle theme"><i class="bi bi-moon"></i></button>
        </div>
      </div>

      <div class="hero clean-hero">
        <div>
          <div class="title">Executive • Architect • AI</div>
          <div class="subtitle small-muted">Domain-driven AI agents • SaaS • LMS • SIMS</div>
        </div>
      </div>

      <div style="padding:12px"><input id="search" class="form-control" placeholder="Search sections, projects, commands" /></div>
      <div id="sectionsList" role="list" aria-label="Sections list"></div>

      <div style="padding:12px;border-top:1px solid rgba(12,18,49,0.03);font-size:13px;color:var(--muted)">Tip: press <strong>Ctrl/Cmd + A</strong> for architecture diagram, or ask about <strong>agentic AI</strong>.</div>
    </aside>

    <!-- CENTER: Chat / Content -->
    <main class="panel" id="main" role="main">
      <div class="chat-header">
        <div>
          <div id="chatTitle" style="font-weight:900">Welcome</div>
          <div id="chatSub" class="small-muted">Merged V6 — premium portfolio experience</div>
        </div>
        <div class="ms-auto d-flex align-items-center gap-2">
          <div class="pwa-badges"><span class="pill">PWA</span><span class="pill">SEO</span></div>
          <button id="downloadSitemap" class="btn btn-sm btn-outline-secondary">Sitemap</button>
        </div>
      </div>

      <div id="chatBody" class="chat-body" role="log" aria-live="polite">
        <!-- dynamic messages and content --->
      </div>

      <div class="input-row">
        <div class="control" style="flex:1;display:flex;align-items:center;gap:8px">
          <input id="chatInput" class="form-control" placeholder="Ask: about / projects / architecture / agentic AI / contact" aria-label="Message input" />
          <button id="aiAssist" class="btn btn-outline-secondary" title="Ask AI"><i class="bi bi-robot"></i></button>
        </div>
        <button id="sendBtn" class="btn btn-primary" aria-label="Send"><i class="bi bi-send-fill"></i></button>
      </div>
    </main>

    <!-- RIGHT: Profile / Executive + AI -->
    <aside class="panel right-panel" id="right">
      <div class="profile">
        <div style="display:flex;gap:12px;align-items:center">
          <div class="avatar tilt" id="avatar">EB</div>
          <div>
            <div style="font-weight:900">Edwin Barnabas</div>
            <div class="small-muted">CIO — ekhool</div>
            <div class="small-muted">Software Solution Architect & AI Agentic Framework Builder</div>
          </div>
        </div>

        <div>
          <div class="small-muted">Core Skills</div>
          <div style="margin-top:8px;display:flex;gap:8px;flex-wrap:wrap">
            <div class="skill">System Architecture</div>
            <div class="skill">AI Agents</div>
            <div class="skill">Microservices</div>
            <div class="skill">LMS / SIMS</div>
          </div>
        </div>

        <div>
          <div class="small-muted">Projects (timeline)</div>
          <div id="timeline" style="display:flex;flex-direction:column;gap:10px;margin-top:8px"></div>
        </div>

        <div>
          <div class="small-muted">Skill heatmap</div>
          <div id="heatmap" style="display:flex;gap:8px;flex-wrap:wrap;margin-top:8px"></div>
        </div>

        <div style="margin-top:auto;display:flex;gap:8px;align-items:center">
          <button id="downloadCV" class="btn btn-outline-primary">Download CV</button>
          <button id="downloadVCard" class="btn btn-primary">vCard</button>
        </div>
      </div>
    </aside>

  </div>

  <!-- V6 App JS -->
  <script>
    // --- Data ---
    const SECTIONS = [
      {id:'blogs',title:'Blogs',preview:'Latest thoughts • Architecture • AI',messages:[
        "Here are my blog highlights:",
        "1. How Agentic AI Transforms Enterprise Workflows",
        "2. LMS/SIMS Modern Architecture 2025 — Design Principles",
        "3. Building Domain-Driven AI Agents for Real Systems",
        "4. Architecture Mistakes Most Teams Make (And How to Avoid Them)",
        "Ask: 'open blog 1' or 'show more blogs'."
      ]},
      
      {id:'about',title:'About Edwin',preview:'CIO • Architect • AI',messages:['Hello — I\'m Edwin Barnabas (edwin18g), CIO at ekhool. I architect enterprise SaaS systems and domain-driven AI agents.','I focus on reliability, observability, and making AI work for real business domains.']} ,
      {id:'architecture',title:'Architecture',preview:'Enterprise & AI Systems',messages:['Pattern: API Gateway → Auth → Services → Event Bus (RabbitMQ) → Storage (MySQL/Mongo) → Observability (ELK).','I design agent frameworks as first-class citizens in the system; agents process events and trigger workflows.']} ,
      {id:'projects',title:'Projects',preview:'LMS • SIMS • Agentic AI',messages:['ekhool LMS — multi-tenant, analytics-first, mobile-first.','SIMS Suite — admissions, academics & compliance.','Agentic Framework — domain agents for alerts and automation.']},
      {id:'skills',title:'Skills',preview:'Architecture • AI • Dev',messages:['Languages: JS, PHP, SQL. Tools: Redis, RabbitMQ, MySQL, MongoDB, Nginx, Docker.','Focus: scalability, security, observability.']} ,
      {id:'contact',title:'Contact',preview:'Get in touch',messages:['Email: your@email.com','LinkedIn: https://linkedin.com/in/your-link','GitHub: https://github.com/your-github']} 
    ];

    const PROJECTS = [
      {title:'ekhool LMS',date:'2024',desc:'Multi-tenant LMS with analytics and AI',kpi:'420+ schools',tag:'SaaS'},
      {title:'SIMS Suite',date:'2023',desc:'School information & compliance',kpi:'regional deployment',tag:'Education'},
      {title:'Agentic Framework',date:'2025',desc:'Domain-driven AI agents for automation',kpi:'prototype',tag:'AI'}
    ];

    // --- Render UI ---
    const sectionsEl = document.getElementById('sectionsList');
    function renderSections(filter=''){ sectionsEl.innerHTML=''; SECTIONS.filter(s=> (s.title+' '+s.preview).toLowerCase().includes(filter.toLowerCase())).forEach(s=>{
      const item = document.createElement('div'); item.className='section-item'; item.tabIndex=0; item.innerHTML = `<div class='dot' style='background:linear-gradient(135deg,var(--accent),var(--accent-2))'>${s.title.charAt(0)}</div><div><div style='font-weight:700'>${s.title}</div><div class='small-muted'>${s.preview}</div></div>`;
      item.addEventListener('click', ()=>{ setActive(s.id); openSection(s.id); }); item.addEventListener('keydown', e=>{ if(e.key==='Enter'){ setActive(s.id); openSection(s.id); } }); sectionsEl.appendChild(item);
    }); }
    function setActive(id){ Array.from(sectionsEl.children).forEach(c=>c.classList.remove('active')); const node=[...sectionsEl.children].find(n=>n.textContent.trim().toLowerCase().startsWith(id.charAt(0))); if(node) node.classList.add('active'); }

    // timeline + heatmap
    const timelineEl = document.getElementById('timeline'); PROJECTS.forEach(p=>{ const c=document.createElement('div'); c.className='card-project'; c.innerHTML = `<div style='display:flex;justify-content:space-between;align-items:center'><div style='font-weight:700'>${p.title}</div><div class='small-muted'>${p.date}</div></div><div class='small-muted'>${p.desc}</div><div style='margin-top:8px'><span class='pill'>${p.tag}</span> <span class='small-muted ms-2'>${p.kpi}</span></div>`; timelineEl.appendChild(c); });
    const heatEl = document.getElementById('heatmap'); ['Architecture','AI','DevOps','Frontend','Backend','Data'].forEach((h,i)=>{ const e=document.createElement('div'); e.className='cell'; e.style.padding='6px 10px'; e.style.borderRadius='8px'; e.style.background=`rgba(99,102,241,${0.06 + i*0.06})`; e.style.color='var(--accent)'; e.style.fontWeight='700'; e.textContent=h; heatEl.appendChild(e); });

    // Chat utilities
    const chatBody = document.getElementById('chatBody'); function scrollBottom(){ chatBody.scrollTop = chatBody.scrollHeight; }
    function appendMsg(text, who='them', opts={reactions:false,meta:''}){
      const g=document.createElement('div'); g.className='group'; if(opts.meta) { const m=document.createElement('div'); m.className='meta'; m.textContent = opts.meta; g.appendChild(m); }
      const b=document.createElement('div'); b.className='msg '+(who==='me'?'me':'them'); b.tabIndex=0; b.textContent = text; g.appendChild(b);
      if(opts.reactions){ const r=document.createElement('div'); r.className='reactions'; ['👍','🔥','💡'].forEach(emo=>{ const btn=document.createElement('button'); btn.className='reaction'; btn.textContent=emo; btn.addEventListener('click', ()=>{ btn.textContent = emo + ' ' + (parseInt(btn.dataset.count||0)+1); btn.dataset.count = (parseInt(btn.dataset.count||0)+1); }); r.appendChild(btn); }); g.appendChild(r); }
      chatBody.appendChild(g); scrollBottom(); return b;
    }
    function showTyping(){ const t = document.createElement('div'); t.className='typing'; t.innerHTML = `<div class='dots'><span></span><span></span><span></span></div><div class='small-muted ms-2'>typing…</div>`; chatBody.appendChild(t); scrollBottom(); return t; }

    // Open section (simulate typing + reactions)
    function openSection(id){ const sec = SECTIONS.find(s=>s.id===id); if(!sec) return; document.getElementById('chatTitle').textContent = sec.title; document.getElementById('chatSub').textContent = sec.preview; chatBody.innerHTML=''; let i=0; function next(){ if(i>=sec.messages.length) return; const t=showTyping(); const msg = sec.messages[i++]; setTimeout(()=>{ t.remove(); appendMsg(msg,'them',{reactions:true}); setTimeout(next,300); }, Math.min(1400, msg.length*12 + 200)); } next(); }

    // Simple AI assistant (plug-and-play)
    async function aiRespond(text){ // local rule-based; replace with server hook
      const t=text.toLowerCase(); if(t.includes('agent')||t.includes('ai')) return 'I design agentic frameworks that map domain events to agents. Do you want a one-page design?';
      if(t.includes('architecture')||t.includes('scale')) return 'Typical architecture: API Gateway → Auth → Services → Event Bus (RabbitMQ) → Storage → Observability. I can render a diagram (Ctrl/Cmd+A).';
      if(t.includes('projects')||t.includes('portfolio')) return 'See Projects section — I led multiple enterprise deployments. Ask about any specific project.';
      if(t.includes('contact')||t.includes('email')) return 'Email: your@email.com — open to consulting and leadership advisory.';
      return 'Sorry — try: architecture / agentic AI / projects / contact';
    }

    async function handleInput(raw){ const v=raw.trim(); if(!v) return; appendMsg(v,'me'); const direct = SECTIONS.find(s=> s.id===v.toLowerCase() || s.title.toLowerCase().includes(v.toLowerCase())); if(direct){ setTimeout(()=>openSection(direct.id),300); return; } const t=showTyping(); const r = await aiRespond(v); setTimeout(()=>{ t.remove(); appendMsg(r,'them',{reactions:true}); }, 700 + Math.min(900, v.length*12)); }

    // Input handlers
    document.getElementById('sendBtn').addEventListener('click', ()=>{ handleInput(document.getElementById('chatInput').value); document.getElementById('chatInput').value=''; });
    document.getElementById('chatInput').addEventListener('keydown', e=>{ if(e.key==='Enter'){ e.preventDefault(); document.getElementById('sendBtn').click(); } });
    document.getElementById('aiAssist').addEventListener('click', ()=>{ const txt = document.getElementById('chatInput').value || 'Tell me about agentic AI'; handleInput(txt); document.getElementById('chatInput').value=''; });

    // Search
    document.getElementById('search').addEventListener('input', e=>renderSections(e.target.value));

    // Theme toggle with persistence
    const themeToggle = document.getElementById('themeToggle'); const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches; if(localStorage.getItem('theme')==='dark' || (!localStorage.getItem('theme') && prefersDark)) document.body.classList.add('dark'); themeToggle.addEventListener('click', ()=>{ document.body.classList.toggle('dark'); localStorage.setItem('theme', document.body.classList.contains('dark')?'dark':'light'); });

    // Avatar tilt + magnetic cursor for 3D
    const avatar = document.getElementById('avatar'); avatar.addEventListener('mousemove', e=>{ const r=avatar.getBoundingClientRect(); const cx=r.left + r.width/2; const cy=r.top + r.height/2; const dx=(e.clientX - cx)/r.width; const dy=(e.clientY - cy)/r.height; avatar.style.transform = `rotateX(${ -dy * 6 }deg) rotateY(${ dx * 8 }deg) translateZ(8px)`; }); avatar.addEventListener('mouseleave', ()=>{ avatar.style.transform=''; });

    // Keyboard shortcut: Ctrl/Cmd + A -> generate architecture diagram (Mermaid)
    function renderMermaid(){ const code = `graph TD
  API[API Gateway] --> Auth[Auth Service]
  Auth --> Services[Microservices]
  Services --> MySQL[(MySQL)]
  Services --> Mongo[(MongoDB)]
  Services --> Redis[(Redis)]
  Services --> Broker[(RabbitMQ)]
  Broker --> Agents[Agent Workers]
  Agents --> Analytics[Analytics]`;
      const node = document.createElement('div'); node.className='panel soft'; node.style.padding='12px'; node.style.marginTop='12px'; node.innerHTML = `<div style='font-weight:800;margin-bottom:8px'>Architecture Diagram</div><div class='mermaid'>${code}</div>`; chatBody.appendChild(node); try{ mermaid.init(undefined, node.querySelectorAll('.mermaid')); }catch(err){ console.warn(err); } scrollBottom(); }
    document.addEventListener('keydown', e=>{ if((e.ctrlKey||e.metaKey) && (e.key==='a' || e.key==='A')){ e.preventDefault(); renderMermaid(); } });

    // Sitemap download
    document.getElementById('downloadSitemap').addEventListener('click', ()=>{ const xml = `< ?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
  <url><loc>https://edwin18g.com/</loc></url>
  <url><loc>https://edwin18g.com/about</loc></url>
  <url><loc>https://edwin18g.com/projects</loc></url>
</urlset>`; const blob=new Blob([xml],{type:'application/xml'}); const url=URL.createObjectURL(blob); const a=document.createElement('a'); a.href=url; a.download='sitemap.xml'; a.click(); URL.revokeObjectURL(url); });

    // PWA manifest + SW download (buttons available in UI earlier)
    document.getElementById('downloadVCard').addEventListener('click', ()=>{ const vcard = `BEGIN:VCARD
VERSION:3.0
N:Barnabas;Edwin
FN:Edwin Barnabas
ORG:ekhool
TITLE:Chief Information Officer
EMAIL;TYPE=INTERNET:your@email.com
TEL;TYPE=WORK:+91-0000000000
URL:https://edwin18g.com
END:VCARD`; const blob=new Blob([vcard],{type:'text/vcard'}); const url=URL.createObjectURL(blob); const a=document.createElement('a'); a.href=url; a.download='edwin18g.vcf'; a.click(); URL.revokeObjectURL(url); });
    document.getElementById('downloadCV').addEventListener('click', ()=>{ const blob=new Blob(['Resume placeholder — replace with PDF'],{type:'text/plain'}); const url=URL.createObjectURL(blob); const a=document.createElement('a'); a.href=url; a.download='Edwin_Barnabas_CV.txt'; a.click(); URL.revokeObjectURL(url); });

    // Accessibility focus
    document.getElementById('chatInput').focus();

    // Initial render
    // BLOGS PRO DATA
    const BLOGS = [
      {id:1,title:'How Agentic AI Transforms Enterprise Workflows',tag:'AI',desc:'Deep-dive into agentic systems and enterprise automation.',content:'Agentic AI allows enterprises to build autonomous workflows powered by domain rules, event processors, and intelligent routing.'},
      {id:2,title:'LMS/SIMS Modern Architecture 2025 — Design Principles',tag:'Architecture',desc:'A guide to designing scalable education systems.',content:'Modern LMS/SIMS architectures require multi-tenant database isolation, API gateways, queue-based events, and analytics-first design.'},
      {id:3,title:'Building Domain-Driven AI Agents for Real Systems',tag:'AI',desc:'Mapping real-world domains into agent-driven models.',content:'Domain-driven agents subscribe to contextual events and orchestrate actions through modular behaviors.'},
      {id:4,title:'Architecture Mistakes Most Teams Make',tag:'Leadership',desc:'Avoid critical pitfalls when scaling SaaS.',content:'Common issues: tight coupling, no observability, overuse of microservices, lack of caching strategy.'}
    ];

    // Render Blogs List in Chat when triggered
    function renderBlogsList(){
      chatBody.innerHTML = '';
      BLOGS.forEach(b=>{
        const card = document.createElement('div');
        card.className = 'card-project';
        card.style.cursor = 'pointer';
        card.innerHTML = `<div style='font-weight:800'>${b.title}</div>
          <div class='small-muted'>${b.desc}</div>
          <div style='margin-top:6px'><span class='pill'>${b.tag}</span></div>`;
        card.addEventListener('click', ()=>openBlog(b.id));
        chatBody.appendChild(card);
      });
      scrollBottom();
    }

    function openBlog(id){
      const blog = BLOGS.find(b=>b.id===id);
      if(!blog) return;
      chatBody.innerHTML = '';
      appendMsg(blog.title,'them',{meta:'Blog'});
      appendMsg(blog.content,'them');
    }

    renderSections(); openSection('about');

    // Performance note: mermaid and external libs loaded; heavy tasks deferred
  </script>

</body>
</html>
