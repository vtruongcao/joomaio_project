
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php foreach ($this->menu as $index => $row) :?>
                    <?php if (isset($row['childs']) && is_array($row['childs']) && $row['childs']) : ?>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><?php echo isset($row['icon']) ? $row['icon'] : '' ?><span
                            class="hide-menu"><?php echo $row['title']; ?> </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <?php foreach($row['childs'] as $key => $child) :?>
                                    <li class="sidebar-item"><a href="<?php echo isset($child['link']) ? $child['link'] : ''; ?>" class="sidebar-link"><span
                                                class="hide-menu"> <?php echo $child['title']; ?>
                                            </span></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo isset($row['link']) ? $row['link'] : ''; ?>"
                                aria-expanded="false"><?php echo isset($row['icon']) ? $row['icon'] : '' ?><span
                                    class="hide-menu"><?php echo $row['title'] ?></span></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>