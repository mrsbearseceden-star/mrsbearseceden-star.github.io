# The Preschool Professional — Claude Code Instructions

Owner: Mrs. Bear (mrs.bearsece.den@gmail.com)
Site: https://www.thepreschoolprofessional.net
Repo: thepreschoolprofessional/thepreschoolprofessional.github.io

---

## Video Library

The video library artifact (bookmark this):
https://claude.ai/code/artifact/66f5f990-f47d-4e46-bcc9-eb6256172c8d

Individual videos:
- Video #1 — 60-sec website overview: https://claude.ai/code/artifact/a72f934e-880b-429d-8c9d-8534c96d1add
- Video #2 — Milestone Wizard (30 sec): https://claude.ai/code/artifact/06275625-a101-4cad-ab70-f9cb19c85fa6

When a new video is built, add it to both lists above AND update the library artifact.

---

## How to Build a New Video

The master template is at: `hive/tpp-video-template.html`

To make a new video:
1. Read `hive/tpp-video-template.html`
2. Copy the file content
3. Update the `CONFIG` block at the top (scenes, captions, script)
4. Write the new file to `hive/tpp-video-[topic-slug].html`
5. Publish as an Artifact using the Artifact tool
6. Add the new video's link to this file AND to the library artifact

Videos are 30 seconds (5 scenes) unless otherwise requested.
Format: TikTok portrait 9:16. No pricing. Warm, conversational tone.

---

## Video Backlog (build these next)

- [ ] #3  Supply List Generator       — Free Resource, 30 sec
- [ ] #4  Lesson Plan Builder          — Free Resource, 30 sec
- [ ] #5  Parent Communication Kit     — Free Resource, 30 sec
- [ ] #6  Hiring Toolkit               — Free Resource, 30 sec
- [ ] #7  The Automation System        — System Feature, 30 sec
- [ ] #8  The Command Center           — System Feature, 30 sec
- [ ] #9  Compliance & Licensing       — System Feature, 30 sec
- [ ] #10 Founder Story                — Brand Story, 30 sec

---

## Brand Colors

```
--honey:    #C9821A   (primary accent)
--amber:    #E0A02E   (highlight)
--cream:    #FBF3E5   (light text / background)
--sage:     #A9C86F   (secondary accent, <strong> captions)
--teal:     #3E8C93   (tertiary accent)
--espresso: #2A1D12   (dark base)
```

Scene background colors (dark, brand-aligned):
```
#1A1208  dark espresso
#101A0B  dark sage
#0B1517  dark teal
#17120A  dark brown
#221608  deep espresso
#1E1409  warm brown
```

Caption styling: `<em>` = honey/amber highlight, `<strong>` = sage green highlight

---

## CONFIG Scene Types

| type    | extra fields                                   |
|---------|------------------------------------------------|
| text    | sub (optional paragraph)                       |
| pills   | items: [{text, color:"g"\|"t"\|"s"}]           |
| stat    | stat (big number), statSub (label below)       |
| list    | items: [{text}] — bullet list with teal dots   |
| cta     | sub, tagline, btn, url                         |

---

## Airtable Social Media Content

Base ID: appuTE2viBMO6dSuP
Table: TPP Social Content
Contains 64 pre-written 60-second voiceover scripts for video shorts.
Pull from this table when building new videos to keep scripts consistent.

---

## Key Files

| File | Purpose |
|------|---------|
| `hive/tpp-video-template.html` | Master video template + Milestone Wizard config |
| `CLAUDE.md` | This file — session instructions |
| `index.html` | Site homepage |

---

## Notes

- Never mention pricing in videos
- Tone: warm, conversational, like talking to a fellow educator
- Tagline: "Normalize · Elevate · Thrive"
- Site URL for CTAs: https://www.thepreschoolprofessional.net
- When screen recording: the voiceover script appears below the phone frame — Mrs. Bear reads it while recording
- The caption zone at the bottom of the phone frame shows timed captions during playback
