<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="?page=1&topic_id=<?=$topic['id'];?>">First</a></li>
        <?php if ($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page - 1; ?>&topic_id=<?=$topic['id'];?>">
                    Prev
                </a>
            </li>
        <?php endif; ?>
        <?php if ($page < $total_pages): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page + 1; ?>&topic_id=<?=$topic['id'];?>">
                    Next
                </a>
            </li>
        <?php endif; ?>
        <li class="page-item">
            <a class="page-link" href="?page=<?php echo $total_pages; ?>&topic_id=<?=$topic['id'];?>">
                Last
            </a>
        </li>
    </ul>
</nav>
