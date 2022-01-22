<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Product([
            // 'category_code'             => $row['Category Code'],
            // 'product_code'              => $row['Product Code'],
            // 'name'                      => $row['Name'],
            // 'description'               => $row['Description'],
            // 'ccan_identifier'           => $row['Scan Identifier'],
            // 'requires_ustomization'     => $row['Requires Customization'],
            // 'length'                    => $row['Length (mm)'],
            // 'width'                     => $row['Width (mm)'],
            // 'height'                    => $row['Height (mm)'],
            // 'weight'                    => $row['Weight (gms)'],
            // 'ean'                       => $row['EAN'],
            // 'upc'                       => $row['UPC'],
            // 'isbn'                      => $row['ISBN'],
            // 'color'                     => $row['Color'],
            // 'size'                      => $row['Size'],
            // 'brand'                     => $row['Brand'],
            // 'item_detail_fields'        => $row['Item Detail Fields'],
            // 'tags'                      => $row['Tags'],
            // 'image_url'                 => $row['Image Url'],
            // 'product_page_url'          => $row['Product Page Url'],
            // 'tax_type_code'             => $row['Tax Type Code'],
            // 'gst_tax_type_code'         => $row['GST Tax Type Code'],
            // 'base_price'                => $row['Base Price'],
            // 'cost_price'                => $row['Cost Price'],
            // 'tat'                       => $row['TAT'],
            // 'mrp'                       => $row['MRP'],
            // 'updated'                   => $row['Updated'],
            // 'category_name'             => $row['Category Name'],
            // 'enabled'                   => $row['Enabled'],
            // 'type'                      => $row['Type'],
            // 'component_product_code'    => $row['Component Product Code'],
            // 'component_quantity'        => $row['Component Quantity'],
            // 'component_price'           => $row['Component Price'],
            // 'hsn_code'                  => $row['HSN CODE'],
            // 'tax_calculation_type'      => $row['Tax Calculation Type'],
            // 'batch_group'               => $row['Batch Group'],
            // 'GRN_expiry_tolerance'      => $row['GRN expiry tolerance (in days)'],
            // 'dispatch_expiry_tolerance' => $row['Dispatch expiry tolerance (in days)'],
            // 'return_expiry_tolerance'   => $row['Return expiry tolerance (in days)'],
            // 'Expirable'                 => $row['Expirable'],
            // 'determine_expiry_from'     => $row['Determine Expiry From'],
            // 'shelf_life'                => $row['Shelf Life'],
            // 'expiry_date'               => $row['Expiry Date'],
            

            'category_code'             => $row[0],
            'product_code'              => $row[1],
            'name'                      => $row[2],
            'description'               => $row[3],
            'ccan_identifier'           => $row[4],
            'requires_ustomization'     => $row[5],
            'length'                    => $row[6],
            'width'                     => $row[7],
            'height'                    => $row[8],
            'weight'                    => $row[9],
            'ean'                       => $row[10],
            'upc'                       => $row[11],
            'isbn'                      => $row[12],
            'color'                     => $row[13],
            'size'                      => $row[14],
            'brand'                     => $row[15],
            'item_detail_fields'        => $row[16],
            'tags'                      => $row[17],
            'image_url'                 => $row[18],
            'product_page_url'          => $row[19],
            'tax_type_code'             => $row[20],
            'gst_tax_type_code'         => $row[21],
            'base_price'                => $row[22],
            'cost_price'                => $row[23],
            'tat'                       => $row[24],
            'mrp'                       => $row[25],
            'updated'                   => $row[26],
            'category_name'             => $row[27],
            'enabled'                   => $row[28],
            'type'                      => $row[29],
            'component_product_code'    => $row[30],
            'component_quantity'        => $row[31],
            'component_price'           => $row[32],
            'hsn_code'                  => $row[33],
            'tax_calculation_type'      => $row[34],
            'batch_group'               => $row[35],
            'GRN_expiry_tolerance'      => $row[36],
            'dispatch_expiry_tolerance' => $row[37],
            'return_expiry_tolerance'   => $row[38],
            'Expirable'                 => $row[39],
            'determine_expiry_from'     => $row[40],
            // 'shelf_life'                => $row[41],
            // 'expiry_date'               => $row[42],
        ]);
    }
}
