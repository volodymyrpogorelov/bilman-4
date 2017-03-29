<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => 'Asset Manager
=============

Asset Manager Media Library for MODX Revolution including automatic MIME-type detection.

Watch the video: https://www.youtube.com/watch?v=EPOBgHL--MM&feature=youtu.be

This package adds asset management functionality to MODX Revolution so you can easily upload and edit images and other assets and attach them to any MODX page.  Because it stores all asset data in a custom database table, you can easily search for assets by complex criteria or manipulate the search queries for custom reporting.

The end result of using the Asset Manager can be similar to adding multiple image Template Variables to a template (e.g. using MIGX), but the user interface and backend data model is cleaner.

See https://github.com/craftsmancoding/assetmanager for more information.


Features
========

- Drag and Drop Uploading
- Automatic detection of MIME-types and creation of MODX content-types
- Automatic thumbnail generation
- Output filters to manipulate image dimensions (resize, scale2w, scale2h)
- Drag and Drop sorting of assets
- Animated grouping of assets in a page



Shouts Out / Thanks
===================

This package would not be possible without the beautiful and brilliant work of other coders. 

- Dropzone (http://www.dropzonejs.com/) -- a brilliant drag and drop file uploader with image previews.
- Quicksand (http://razorjack.net/quicksand/) -- a great sorting/animation jQuery library.
- jCrop (http://deepliquid.com/content/Jcrop.html) -- provides image cropping functionality.
- Placehold.it (http://placehold.it/) -- a quick and simple image placeholding service.


Authors 
=======

Everett Griffiths everett@craftsmancoding.com


Copyright 2014

Official Documentation: https://github.com/craftsmancoding/assetmanager/wiki

Bugs and Feature Requests: https://github.com/craftsmancoding/assetmanager

Questions: http://forums.modx.com

This package was built using Repoman (https://github.com/craftsmancoding/repoman/)',
    'changelog' => 'Changelog for Asset Manager

Version 1.1.0
-------------

Compatibility with MODX 2.3


Asset Manager 1.0.0
---------------------------------

First public release!  Finally, we got a streamlined way to manage your MODX Media Library! 

Features include:

    - Drag and Drop image uploading
    - Sorting animation using Quicksand (http://razorjack.net/quicksand/)
    - Avoid duplicate uploads automatically (file signatures calculated on the fly)
    - Image paths and URLs are not hard-coded, so migrating your site and assets is easy.
    - Included Snippets allow you to display any asset at any size. 
    - Output filters allow you to filter any asset to any size.  No more phpThumb!


NOT supported in version 1:

    - Image cropping
    - Image rotation
    - Renaming of images
    - Searching of library',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '94b9c64df573eff1aa81949cc0aa64c9',
      'native_key' => 'assman',
      'filename' => 'modNamespace/970a5cd8012df68e5e9d0911fc79d9e8.vehicle',
      'namespace' => 'assman',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'e54207685216e6adb10ea5857ac2906b',
      'native_key' => NULL,
      'filename' => 'modCategory/635502ff02025ec4151fec2758b32fe8.vehicle',
      'namespace' => 'assman',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => 'bb8aa2c8e016d5d702b4aff311b9691d',
      'native_key' => 'bb8aa2c8e016d5d702b4aff311b9691d',
      'filename' => 'xPDOScriptVehicle/a1116bd3353805d999d393b430993c5d.vehicle',
      'namespace' => 'assman',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '04c4fb97fef43cd7f0c49d87b4bf3431',
      'native_key' => 'assman.version',
      'filename' => 'modSystemSetting/da7250787d5f399deafdeaf0e22de2d6.vehicle',
      'namespace' => 'assman',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => '2eb422b85808c8f69991a4bf9010ceca',
      'native_key' => NULL,
      'filename' => 'modContentType/233af07f08a2efd8221a0cb652d53153.vehicle',
      'namespace' => 'assman',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => '8305cf0a145771c50e32c440a116ede6',
      'native_key' => NULL,
      'filename' => 'modContentType/de2c131200c560167d7d414dbb6a30dd.vehicle',
      'namespace' => 'assman',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => '0b7d4e725c136006bce1088d5ebffb3b',
      'native_key' => NULL,
      'filename' => 'modContentType/13a6dc81c499c6caec6eeb9e10066d93.vehicle',
      'namespace' => 'assman',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => '1f477b8d159ec072acfb89b836fa77fc',
      'native_key' => NULL,
      'filename' => 'modContentType/c61ecd7bdff155b753bf8e1ebc4183c3.vehicle',
      'namespace' => 'assman',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => 'd264f1168e4483a8f1f15bc6406d1094',
      'native_key' => NULL,
      'filename' => 'modContentType/573b9ce6cef3c21344848a9a15f370d2.vehicle',
      'namespace' => 'assman',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => 'fbec9e83c7aebdbf612c75111918c6d2',
      'native_key' => NULL,
      'filename' => 'modContentType/e752da067fbabf5f8671854484b2399a.vehicle',
      'namespace' => 'assman',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => 'c723f2c109c93925dbad7aca493b472b',
      'native_key' => NULL,
      'filename' => 'modContentType/698c133f283042351648fd77028df16b.vehicle',
      'namespace' => 'assman',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => 'fbbea1311702f381784d19eb20e8a0a0',
      'native_key' => NULL,
      'filename' => 'modContentType/7201fb85e14e3a829f29e8e7d5df7e6b.vehicle',
      'namespace' => 'assman',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => '06db653a15a0e34406ccdaf6baaa134c',
      'native_key' => NULL,
      'filename' => 'modContentType/ee46c216aaac9d5c2774635cdd4effcc.vehicle',
      'namespace' => 'assman',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => '9bb48f320d8c87c5304d9e8b2b443951',
      'native_key' => NULL,
      'filename' => 'modContentType/52162ed55d761b2a963c61bd1c082952.vehicle',
      'namespace' => 'assman',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modContentType',
      'guid' => 'fdbd3034a8fb139e156e1a2e479a48b7',
      'native_key' => NULL,
      'filename' => 'modContentType/52159fe537c17faa999291d880346166.vehicle',
      'namespace' => 'assman',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '34bc9d834b1af55a4ca221653d305c96',
      'native_key' => 'assman',
      'filename' => 'modMenu/2837079f5d4c7cde796ae7e02fd268ae.vehicle',
      'namespace' => 'assman',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd4721419824509d7758a86670c488da4',
      'native_key' => 'assman.library_path',
      'filename' => 'modSystemSetting/103891d7dcf1d83c64bab2782d3605d8.vehicle',
      'namespace' => 'assman',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '47a56e8e466aef46ba34b3c1245ad3b7',
      'native_key' => 'assman.url_override',
      'filename' => 'modSystemSetting/71077c3dad17e4c20efa39216c52b18e.vehicle',
      'namespace' => 'assman',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9062792a8230e72b1dcc847a839d5d93',
      'native_key' => 'assman.site_url',
      'filename' => 'modSystemSetting/94a32151ee933b2bf4899d56422fb23f.vehicle',
      'namespace' => 'assman',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8af08e8234ac709a34b5e113537ce2f3',
      'native_key' => 'assman.class_keys',
      'filename' => 'modSystemSetting/98482889325d989ddbe63dfceda995d2.vehicle',
      'namespace' => 'assman',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cf0ccef10b6d8cc47b28edc4ce62001c',
      'native_key' => 'assman.thumbnail_width',
      'filename' => 'modSystemSetting/84bd7c316e1e46e0c16385bdb3755195.vehicle',
      'namespace' => 'assman',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '23519a969ac4eb86710ca213266fa981',
      'native_key' => 'assman.thumbnail_height',
      'filename' => 'modSystemSetting/0e9716d2dda31cdcac58c5c7a8ac57a1.vehicle',
      'namespace' => 'assman',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5119db05c01c135ad2913f1641bf6852',
      'native_key' => 'assman.autocreate_content_type',
      'filename' => 'modSystemSetting/ce0fca7993d3667c4380eae022503099.vehicle',
      'namespace' => 'assman',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0abcd92eea86e9c78bdc92a21216baf4',
      'native_key' => 'assman.groups',
      'filename' => 'modSystemSetting/f168f8b50630d3aa4be2e5eb8b0e2194.vehicle',
      'namespace' => 'assman',
    ),
  ),
);