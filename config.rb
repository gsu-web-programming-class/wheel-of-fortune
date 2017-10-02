require 'compass/import-once/activate'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "/"
sass_dir = "scss"
images_dir = "images"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :expanded

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false


require 'fileutils'
    on_stylesheet_saved do |file|
        if File.exists?(file)
        filename = File.basename(file, File.extname(file))
        File.rename(file, filename + ".pcss")
    end
end