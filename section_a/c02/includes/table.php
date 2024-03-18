<h2>Mystery Prize List</h2>
    <table>
      <tr>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php foreach($product_Games as $value)  { ?>
        <tr>
          <td><?= '?' ?></td>
          <td>$<?= $value ?></td>
        </tr>
      <?php } ?> 
    </table>
    <br>
    <table>
        <tr>
          <th>Books (Index array)</th>
        </tr>
        <?php foreach($product_Books as $item) { ?>
          <tr>
            <td><?php echo $item ?> 
          </tr>
        <?php } ?>
    </table>